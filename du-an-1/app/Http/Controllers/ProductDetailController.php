<?php

namespace App\Http\Controllers;
use App\Models\HomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    function index($slug){
        $data = DB::table('product')
                        ->join('supplier', 'product.SupplierId', '=', 'supplier.SupplierId')
                        ->join('product_image', 'product.ProductId', '=', 'product_image.ProductId')
                        ->join('category', 'product.CategoryId', '=', 'category.CategoryId')
                        ->select('product.*', 'product_image.images','supplier.SupplierName','category.CategoryName')
                        ->where('Slug','=', $slug)
                        -> Get();
        $variant = DB::table('product')
                        ->join('variant', 'product.ProductId', '=', 'variant.ProductId')
                        ->select('variant.Color')
                        ->where('Slug','=', $slug)
                        ->Get();
        $comment = DB::table('comment')
                        ->join('product', 'product.ProductId', '=', 'comment.ProductId')
                        ->join('users','users.UserId', '=', 'comment.UserId')
                        ->select('comment.*','product.Slug','users.Fullname')
                        ->where('product.Slug','=', $slug)
                        ->Get();
//         dd($comment);
        return view('shop/productdetail', compact('data','variant','comment'));
    }
}
