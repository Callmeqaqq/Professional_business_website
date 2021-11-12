<?php

namespace App\Http\Controllers;
// use App\Models\HomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    function index(){
        $data = DB::table('product')->paginate(9);
        $count = DB::table('product')->count();
//         dd($data);
        return view('shop',compact('data','count'));
    }
}
