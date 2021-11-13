<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Profile extends Controller
{
    function index(){
        $user = DB::table('users')->select('Email','Fullname','Address','Phone')->where('UserId','=', Session('LoggedUser'))->get()->first();
        return view('profile',compact('user'));
    }
    function update(Request $request){
        $message = [
            'required' => 'Vui lòng nhập :attribute',
            'email' => 'Vui lòng nhập đúng định dạng email',
            'password.min' => 'Các kí tự không đươc ít hơn 6',
            'password.max' => 'Các kí tự không đươc nhiều hơn 50',
            'name.min' => 'Họ và Tên không đươc ít hơn 5',
            'name.max' => 'Họ và Tên không đươc nhiều hơn 100',
        ];
        $validate = Validator::make($request->all(),[
            'name' => 'required|min:5|max:100',
            'password' => 'required|min:6|max:50',
            'email' => 'required|email',
        ],$message);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }
        $user = DB::table('users')->select('password')->where('UserId','=', Session('LoggedUser'))->get()->first();

        if (Hash::check($request->password,  $user->password)) {
            $query = DB::table('users')
                ->where('UserId','=', Session('LoggedUser'))
                    ->update([
                        'fullname' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'address' => $request->address,
                    ]);
            if($request){
                return back()->with('status','Cập nhật thành công');
            }else{

            return back()->with('status','Mật khẩu không chính xác');
            }
        }else{
            return back()->with('status','Mật khẩu không chính xác');
        }
    }
    function changePassword(){

    }
}
