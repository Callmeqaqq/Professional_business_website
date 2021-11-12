<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Profile extends Controller
{
    function index(){
        return view('profile');
    }
    function update(Request $request){
        $message = [
            'required' => 'Vui lòng nhập :attribute',
//            'name.required' => 'Vui lòng nhập Họ và Tên',
            'email.unique' => 'Email đã được đăng ký',
            'email' => 'Vui lòng nhập đúng định dạng email',
            'password.min' => 'Các kí tự không đươc ít hơn 6',
            'password.max' => 'Các kí tự không đươc nhiều hơn 50',
            'name.min' => 'Họ và Tên không đươc ít hơn 5',
            'name.max' => 'Họ và Tên không đươc nhiều hơn 100',
        ];
        $validate = Validator::make($request->all(),[
            'name' => 'required|min:5|max:100',
            'password' => 'required|min:6|max:50',
            'email' => 'required|email|unique:users',
        ],$message);
        if ($validate->fails()) {
            return redirect('/buyer/register')->withErrors($validate)->withInput();
        }
//        return $validate->fails();
    }
    function changePassword(){

    }
}
