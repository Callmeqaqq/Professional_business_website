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
        return view('admin/adminproduct',compact('product'));

    }
    public function add(){
        $supplier = DB::table('supplier')->select('supplier.SupplierId','supplier.SupplierName')->get();
        return view('admin/addproduct',compact('supplier'));
    }
    public function create(Request $request){
//        dd($request->All());
//        Up ảnh lên nà
        $file = $request->Images;
        $file_name = $file->getClientOriginalName();
        $file->move(base_path('public/images/product'),$file_name);


        DB::table('product')
            ->insert([
                'ProductName'=>$request->ProductName,
                'Images'=>$file_name,
                'Price'=>$request->price_new,
                'Discount'=>$request->Discount,
                'Slug'=>$request->Slug,
                'Active'=>$request->Active,
                'Weight'=>$request->Weight,
                'Descreption'=>$request->Descreption,
                'CreateAt'=>(date('Y-m-d')),
                'Views'=>0,
                'SupplierId' => $request->SupplierId,
                'UserId' => 20,
                'CategoryId'=> $request->CategoryId
            ]);
        $slug_pd=DB::table('product')->where('Slug','=',$request->Slug)->select('product.ProductId')->get();
        foreach($slug_pd as $slug){
            $ProductId=$slug->ProductId;
        }
        foreach ($request->images_multiple as $img){
            $file = $img;
            $file_name = $file->getClientOriginalName();
            $file->move(base_path('public/images/product'),$file_name);
            DB::table('product_image')
                ->insert([
                    'images'=>$file_name,
                    'ProductId'=>$ProductId
                ]);
        }
        session()->put('add-success', $request->ProductName);
        Return redirect()->route('add-product');
    }
}
