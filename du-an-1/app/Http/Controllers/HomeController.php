<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        $data = DB::table('product')
            ->where('Active', '=', 1)
            ->orderByDesc('CreateAt')
            ->limit(8)
            ->get();
        $discount = DB::table('product')
            ->where('Active', '=', 1)
            ->where('Discount', '!=', 0)
            ->orderBy('CreateAt')
            ->limit(8)
            ->get();
        $sliders = DB::table('slider')
            ->where('Active', '=', 1)
            ->get();
        $company = DB::table('supplier')
            ->select('supplier.SupplierName', 'supplier.Images')
            ->get();
        return view('home', compact('data', 'sliders', 'company', 'discount'));
    }
}
