<?php

namespace App\Http\Controllers;
// use App\Models\HomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    function index(){
        $data = DB::table('product')
            ->join('category','product.CategoryId','=','category.CategoryId')
            ->select('product.*','category.CatActive')
            ->where('category.CatActive','=',1)
            ->where('Active','=',1)
            ->paginate(9);

//         dd($data);
        return view('shop/shop',compact('data'));
    }

    function category($slug){
        $data = DB::table('product')
            ->join('category','product.CategoryId','=','category.CategoryId')
            ->select('product.*','category.CatActive','category.CategorySlug','category.CategoryName')
            ->where('category.CatActive','=',1)
            ->where('Active','=',1)
            ->where('category.CategorySlug','=',$slug)
            ->paginate(9);

//         dd($data);
        return view('shop/shop',compact('data'));
    }

}
