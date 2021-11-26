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
        Session::forget('Ship');
        $shipfee = Session::get('Ship');
        return view('checkout', compact('data', 'shipfee'));
    }

    public function checkoutSubmit(Request $request)
    {
        $validatedDate = $request->validate([
        ]);
        $fullname = $request->input('Fullname');
        $address = $request->input('Address');
        $phone = $request->input('Phone');
        $email = $request->input('Email');
        $message = $request->input('Message');
        $total = Session::get('Cart')->totalPrice;
        $shipfee = Session::get('Ship');
        $topay = $total + $shipfee;
        $create_time = Carbon::now();
        $payment = $request->input('Payment_method');
        $create_by = Session::get('LoggedUser');
        $status = 1; // 1 = Processing order, before it change to 2 for delivering
        $ship_option = Session::get('city_check');//return 1 || 2; 1 == inside the hcm city

        if($ship_option == 1){
            $delivery_time = 2;// 2 days since checkout
        }else{
            $delivery_time = 5;// 5 days since checkout
        }
        return 'Fullname: ' . $fullname .
            ' Adress: ' . $address .
            ' Phone: ' . $phone .
            ' Email: ' . $email .
            ' Message: ' . $message .
            ' Phí vc : ' . $shipfee .
            ' Time: ' . $create_time .
            ' total: ' . $total .
            ' topay: ' . $topay .
            ' Delivery Time: ' . $create_time->addDays($delivery_time)->toDateString() .
            ' payment: ' . $payment .
            ' create_by: ' . $create_by .
            ' status: ' . $status .
            ' ship_option: ' . $ship_option;
    }
}
