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
}
