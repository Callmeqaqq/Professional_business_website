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
            'Email' => 'required|email',
            'Password' => 'required|min:6|max:50',
        ]);
        $fullname = $request->input('Fullname');
        $address = $request->input('Address');
        $phone = $request->input('Phone');
        $email = $request->input('Email');
        $message = $request->input('Message');
        return 'Fullname:'.$fullname.'Email:'.$email.'message:'.$message;
    }
}
