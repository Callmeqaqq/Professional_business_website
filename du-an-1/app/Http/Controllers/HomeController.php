<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    function index(){
        $data = DB::table('product')->where('Active', '=',1)->limit(8)->get();
        $slider = DB::table('slider')->get();
        $company = DB::table('supplier')->select('supplier.SupplierName', 'supplier.Images')->get();
        return view('home', compact('data','slider', 'company'));
    }
}
