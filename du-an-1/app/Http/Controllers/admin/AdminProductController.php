<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class AdminProductController extends Controller
{
    public function index(){
        $product = DB::table('product')->get();
        return view('admin/product/adminproduct',compact('product'));

    }
    public function add(){
        $supplier = DB::table('supplier')->select('supplier.SupplierId','supplier.SupplierName')->get();
        $product = DB::table('product')->select('product.ProductId','product.ProductName')->get();
        return view('admin/product/addproduct',compact('supplier','product'));
    }
    public function create(Request $request){
        $check_slug = DB::table('product')->get();
        $check=0;
        foreach ($check_slug as $slg){
            if($slg->Slug == $request->Slug){
                $check = 1;
                break;
            }
        }
        if($check != 1) {
            $name_color = '';
            $name_color .= $request->ProductName;
            $name_color .= ' ';
            $name_color .= $request->Color;
//        dd($request->All());
//        Up ảnh mặc định lên nà
            $file = $request->Images;
            $file_name = $file->getClientOriginalName();
            $file->move(base_path('public/images/product'), $file_name);

//  Chèn Sản phẩm mới vào danh sách sản phẩm
            DB::table('product')
                ->insert([
                    'ProductName' => $request->ProductName,
                    'Images' => $file_name,
                    'Price' => $request->price_new,
                    'Discount' => $request->Discount,
                    'Slug' => $request->Slug,
                    'Active' => $request->Active,
                    'Weight' => $request->Weight,
                    'Descreption' => $request->Descreption,
                    'CreateAt' => (date('Y-m-d')),
                    'Views' => 0,
                    'SupplierId' => $request->SupplierId,
                    'UserId' => 20,
                    'CategoryId' => $request->CategoryId
                ]);
//        Lấy id sản phẩm vừa tạo ra
            $slug_pd = DB::table('product')->where('Slug', '=', $request->Slug)->select('product.ProductId')->get();
            foreach ($slug_pd as $slug) {
                $ProductId = $slug->ProductId;
            }
//        Chèn tất cả hình ảnh của sản phẩm
            foreach ($request->images_multiple as $img) {
                $file = $img;
                $file_name1 = $file->getClientOriginalName();
                $file->move(base_path('public/images/product'), $file_name1);
                DB::table('product_image')
                    ->insert([
                        'images' => $file_name1,
                        'ProductId' => $ProductId
                    ]);
            }
//        Chèn Biến thể mặc định cho Sản phẩm mới tạo
            DB::table('variant')
                ->insert([
                    'VariantName' => $request->Color,
                    'Price' => 0,
                    'Description' => $name_color,
                    'Active' => 1,
                    'Color' => $file_name,
                    'ProductId' => $ProductId,
                    'Quantity' => $request->Quantity
                ]);
            session()->put('add-success', $request->ProductName);
        }else{
            session()->put('add-success-fail', 'Tên sản phẩm đã tồn tại');
        }
        Return redirect()->route('add-product');
    }

    public function add_category(){
        return view('admin/product/addcategory');
    }
    public function create_category(Request $request){
//        dd($request->All());
//        exit();
        $file = $request->CategoryImage;
        $file_name = $file->getClientOriginalName();
        $file->move(base_path('public/images/product'),$file_name);

        DB::table('category')
            ->insert([
                'CategoryName'=> $request->CategoryName,
                'CategoryImage'=> $file_name,
                'CatActive'=>$request->CatActive,
                'CategorySlug'=>$request->CategorySlug
            ]);

        session()->put('add-success', $request->CategoryName);
        Return redirect()->route('add-category');
    }

    public function create_variant(Request $request){
//        dd($request->All());
//        exit();
        $file = $request->Images;
        $file_name = $file->getClientOriginalName();
        $file->move(base_path('public/images/product'),$file_name);

        $name = DB::table('product')
            ->where('ProductId','=',$request->ProductId)
            ->select('ProductName')
            ->first();

        $name_color = $name->ProductName;
        $name_color.=' ';
        $name_color.=$request->Color;

        DB::table('variant')
            ->insert([
                'VariantName'=>$request->Color,
                'Price'=>($request->Price_variant)/100,
                'Description' =>$request->Description,
                'Active'=>$request->Active,
                'Color'=>$file_name,
                'ProductId'=>$request->ProductId,
                'Quantity'=>$request->Quantity
            ]);
        session()->put('add-success-v',$name_color);
        Return redirect()->route('add-product');
    }

    public function edit($slug){
        $supplier = DB::table('supplier')->select('supplier.SupplierId','supplier.SupplierName')->get();
        $product = DB::table('product')->select('product.ProductId','product.ProductName')->get();
        $get_product = DB::table('product')->where('Slug',$slug)->get();
        foreach($get_product as $gd){
            $ProductId = $gd->ProductId;
        }
        $image  = DB::table('product_image')->where('ProductId','=',$ProductId)->get();
        $variant = DB::table('variant')->where('ProductId','=',$ProductId)->get();
        return view('admin/product/editproduct',compact('supplier','product','get_product','image','variant'));
    }

    public function createedit(Request $request){
//        dd($request->all());
        if($request->Slug != null){
            DB::table('product')->where('ProductId','=',$request->ProductId)->update([
                'ProductName'=>$request->ProductName,
                'Slug'=>$request->Slug
            ]);
        }
        DB::table('product')->where('ProductId','=',$request->ProductId)->update([
            'CategoryId'=>$request->CategoryId,
            'SupplierId'=>$request->SupplierId,
            'Price'=>$request->price_new,
            'Discount' => $request->Discount,
            'Weight' =>$request->Weight,
            'Descreption' =>$request->Descreption,
            'Active' =>$request->Active,
        ]);
        if(isset($request->Images)){
            $file = $request->Images;
            $file_name = $file->getClientOriginalName();
            $file->move(base_path('public/images/product'),$file_name);

            DB::table('product')->where('ProductId','=',$request->ProductId)->update([
               'Images'=>$file_name
            ]);
        }
        $count = DB::table('product_image')->where('ProductId','=',$request->ProductId)->count();
        $thua = 0;
        $success=0;
        if(isset($request->images_multiple)){
            foreach ($request->images_multiple as $img){
                $count++;
                if($count <= 8){
                    $file = $img;
                    $file_name1 = $file->getClientOriginalName();
                    $file->move(base_path('public/images/product'),$file_name1);
                    DB::table('product_image')
                        ->insert([
                            'images'=>$file_name1,
                            'ProductId'=>$request->ProductId
                        ]);
                    $success++;
                }else{
                    $thua++;
                }
            }
        }
        if($thua!=0){
            session()->put('thua',$thua);
            session()->put('duoc',$success);
        }
        session()->put('edit-success',$request->ProductId);
        if(isset($request->Slug)){
            Return redirect()->route('admin.edit',[$request->Slug]);
        }else{
            Return redirect()->back();
        }

    }

    public function edit_variant(Request $request){
//        dd($request->All());
        DB::table('variant')->where('VariantId',$request->VariantId)->update([
            'VariantName' => $request->VariantName,
            'Price'=>$request->Price_variant/100,
            'Description'=>$request->Description,
            'Active'=>$request->Active,
            'Quantity'=>$request->Quantity
        ]);
        if(isset($request->Images)){
            $file = $request->Images;
            $file_name = $file->getClientOriginalName();
            $file->move(base_path('public/images/product'),$file_name);

            DB::table('variant')->where('VariantId',$request->VariantId)->update([
                'Color'=>$file_name
            ]);
        }
        session()->put('add-success-v',$request->VariantId);
        Return redirect()->route('admin.edit',[$request->Slug]);
    }
    public function load_img(Request $request){
//        dd($request->All());
        $img = DB::table('product_image')->where('ProductId',$request->productId)->get();
        $output = '<div class="select-img col-12" onclick="getIdimg();">';
        foreach($img as $i){
            $output .= '
                <input style="display:none; position: absolute" type="radio" name="emotion" class="input-hidden" id="a'.$i->ImageId.'" value="'.$i->ImageId.'"/>
                <label style="cursor: pointer; position:absolute; top:-5px; color:red;" for="a'.$i->ImageId.'">
                    <i style="font-size: 20px;" class="fas fa-times-circle"></i>
                </label>
                <img style="margin-right:10px; width:10%" title="" src="'.asset('/images/product/'.$i->images).'"/>
            ';
        }
        $output .= '</div>';
        echo $output;
    }

    public function deleteimg(Request $request){
        DB::table('product_image')->where('ImageId',$request->idimg)->delete();
    }
}
