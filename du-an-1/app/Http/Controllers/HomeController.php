<?php

namespace App\Http\Controllers;
// use App\Models\HomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    function index(){
        $data = DB::table('product')->offset(2)->limit(8)->get();
        return view('home', compact('data'));
    }
}
