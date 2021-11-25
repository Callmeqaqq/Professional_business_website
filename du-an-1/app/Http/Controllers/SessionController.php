<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class SessionController extends Controller
{
    public function createsession(Request $request)
    {
        Session::put('Ship', $request->totalship);
        echo "session created";
    }
    public function getsession()
    {
        dd(Session::get('Ship'));
    }
}
