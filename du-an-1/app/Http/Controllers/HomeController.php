<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    function index(){
        $data = DB::table('product')->where('Active', '=',1)->orderByDesc('CreateAt')->limit(8)->get();
        $slider = DB::table('slider')->get();
        return view('home', compact('data','slider'));
    }
}
