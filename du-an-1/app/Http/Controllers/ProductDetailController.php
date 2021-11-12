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
//         dd($data);
        return view('shop/productdetail', compact('data','variant'));
    }
}
