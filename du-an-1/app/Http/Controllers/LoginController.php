<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index($name){
        return $name;
//        return view('buyer');
    }

}
