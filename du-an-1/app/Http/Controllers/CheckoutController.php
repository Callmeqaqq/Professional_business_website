<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    function index(){
        $data = DB::table('shipoption')->value('PricePerKm');
        return view('checkout', compact('data', compact('data')));
    }
}
