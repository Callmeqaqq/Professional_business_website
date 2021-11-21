<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    function index()
    {
        $data = DB::table('shipoption')->value('PricePerKm');
        return view('checkout', compact('data', compact('data')));
    }

    public function checkoutSubmit(Request $request)
    {
        $validatedDate = $request->validate([
//            'Email' => 'required|email',
        ]);
        $fullname = $request->input('Fullname');
        $address = $request->input('Address');
        $phone = $request->input('Phone');
        $email = $request->input('Email');
        $time = now();
        $message = $request->input('Message');
        return 'Fullname: '.$fullname.' Phone: '.$phone.' Email: '.$email.' Time: '.$time.' Message: '.$message;
    }
}
