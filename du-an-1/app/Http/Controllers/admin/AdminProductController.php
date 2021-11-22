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
    public function edit_category($slug){
        $category = DB::table('category')->where('CategorySlug', $slug)->get();
        return view('admin/product/editcategory',compact('category'));
    }

    public function createedit_category(Request $request){
//        dd($request->All());
        $check=0;
        if($request->CategoryName != null){
            $check_name = DB::table('category')->where('CategorySlug',$request->CategorySlug)->get();
            foreach($check_name as $item){
                $check++;
            }
            if($check==0){
                DB::table('category')->where('CategoryId',$request->CategoryId)->update([
                   'CategoryName'=>$request->CategoryName,
                   'CategorySlug'=>$request->CategorySlug,
                   'CatActive'=>$request->CatActive
                ]);
                if(isset($request->Images)){
                    $file = $request->Images;
                    $file_name = $file->getClientOriginalName();
                    $file->move(base_path('public/images/product'),$file_name);

                    DB::table('category')->where('CategoryId','=',$request->CategoryId)->update([
                        'CategoryImage' => $file_name
                    ]);
                };
            }
        }else{
            if(isset($request->Images)){
                $file = $request->Images;
                $file_name = $file->getClientOriginalName();
                $file->move(base_path('public/images/product'),$file_name);

                DB::table('category')->where('CategoryId','=',$request->CategoryId)->update([
                    'CategoryImage' => $file_name
                ]);
            };
            DB::table('category')->where('CategoryId',$request->CategoryId)->update([
               'CatActive'=>$request->CatActive
            ]);
        }
//        echo $check;
//        exit();
        if($check==0){
            session()->put('e-success',$request->CategoryId);
        }else{
            session()->put('e-failed','a');
        }
        if($request->CategorySlug!=null && $check==0){
            Return redirect()->route('edit.category',[$request->CategorySlug]);
        }else{
            Return redirect()->back();
        }

    }

    public function delete_category($slug){
        $cat_id=DB::table('category')->select('CategoryId','CategoryName')->where('CategorySlug',$slug)->get();
        foreach($cat_id as $cat){
            $id=$cat->CategoryId;
            $name=$cat->CategoryName;
        }
        $pro_id=DB::table('product')->select('ProductId')->where('CategoryId',$id)->get();
        foreach($pro_id as $pd){
            DB::table('variant')->where('ProductId',$pd->ProductId)->delete();
            DB::table('product_image')->where('ProductId',$pd->ProductId)->delete();
            DB::table('product')->where('ProductId',$pd->ProductId)->delete();
        }
        DB::table('category')->where('CategoryId',$id)->delete();
        session()->put('del-success',$name);
        Return redirect()->route('admin.category');
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
        $check_name = DB::table('variant')->where('ProductId','=',$request->ProductId)->get();
        $check=0;
        foreach ($check_name as $item){
            if($item->VariantName == $request->Color){
                $check = 1;
                break;
            }
        }
        if($check == 0){
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
        }else{
            session()->put('add-success-f',$request->Color);
        }
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
        $check=0;
        if($request->Slug!=null){
            $check_name = DB::table('product')->where('ProductName',$request->ProductName)->get();
            foreach($check_name as $item){
                $check++;
            }
        }
        if($check==0){
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
        }else{
            session()->put('edit-failed','a');
        }
        if(isset($request->Slug)){
            Return redirect()->route('admin.edit',[$request->Slug]);
        }else{
            Return redirect()->back();
        }

    }

    public function edit_variant(Request $request){
//        dd($request->All());
        $check=0;
        $check_null=0;
        if($request->VariantName!=null){
            $check_name=DB::table('variant')->where('VariantName',$request->VariantName)->where('ProductId',$request->ProductId)->get();
            foreach($check_name as $item){
                $check++;
            }
        }else{
            $check_null++;
        }

        if($check==0){
            if($check_null==0) {
                DB::table('variant')->where('VariantId', $request->VariantId)->update([
                    'VariantName' => $request->VariantName
                ]);
            }

            DB::table('variant')->where('VariantId',$request->VariantId)->update([

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
        }else{
            session()->put('add-success-f',$request->VariantId);
        }

        Return redirect()->route('admin.edit',[$request->Slug]);
    }

    public function delete_product($slug){
        echo $slug;
        $ProductId = DB::table('product')->select('ProductId','ProductName')->where('Slug',$slug)->get();
        foreach ($ProductId as $item){
            $id = $item->ProductId;
            $name = $item->ProductName;
        }
        DB::table('variant')->where('ProductId',$id)->delete();
        DB::table('product_image')->where('ProductId',$id)->delete();
        DB::table('product')->where('Slug',$slug)->delete();

        session()->put('del-success',$name);
        Return redirect()->route('admin.product');
    }
    public function delete_variant($id){
        DB::table('variant')->where('VariantId',$id)->delete();
        session()->put('del-success-v',$id);
        Return redirect()->back();
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
