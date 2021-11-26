<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    function index()
    {
        $data = DB::table('shipoption')->value('PricePerKm');
        return view('checkout', compact('data', compact('data')));
    }

    public function checkoutSubmit(Request $request)
    {
//        $validatedDate = $request->validate([
//        ]);
        $fullname = $request->input('Fullname');
        $address = $request->input('Address');
        $phone = $request->input('Phone');
        $email = $request->input('Email');
        $message = $request->input('Message');
        $shipfee = Session::get('Ship');
        $create_time = Carbon::now();
        return 'Fullname: ' . $fullname . 'Adress:' . $address . ' Phone: ' . $phone . ' Email: ' . $email . ' Message: ' . $message . ' Phí vc :' . $shipfee . ' Time: ' . $create_time.' Delivery Time: ' . $create_time->addDays(3)->toDateString();
    }
}
