<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdministratorController extends Controller
{
    function index()
    {
        $admins = DB::table('users')
            ->join('role', 'role.id_role', '=', 'users.UserRole')
            ->select('users.UserId', 'users.Fullname', 'users.Email', 'role.RoleName', 'active')
            ->where('users.UserRole', '!=', '6')
            ->get();

        $page = 'administrator';
        return view('admin/administrator', compact('admins', 'page'));
    }

    function add()
    {
        $listRole = DB::table('role')->get();
        return view('admin/addAdminstrator', compact('listRole'));
    }

    function delete($id)
    {
        $delete = DB::table('users')->where('UserId','=',$id)->delete();
        echo $delete;
    }

    function update($id)
    {
        $user = DB::table('users')
            ->select('UserRole', 'Fullname', 'Email', 'Active')
            ->where('UserId', '=', $id)
            ->first();
        $listRole = DB::table('role')->get();
        return view('admin/updateAdminstrator', compact('listRole','user'));
    }

    function postUpdate(Request $request)
    {
        $message = [
            'required' => 'Chưa nhập :attribute',
            'email' => 'Vui lòng nhập đúng định dạng email',
            'unique' => 'email Đã đăng ký'
        ];
        //validate request
        $validate = Validator::make($request->all(), [
            'Fullname' => 'required|string',
            'role' => 'required',
        ], $message);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }
        $query = DB::table('users')
            ->where('Email' ,'=' , $request->email)
            ->update([
                'fullname' => $request->Fullname,
                'UserRole' => $request->role,
                'Active' => $request->status,
            ]);
        echo $query;
    }
    function postAdd(Request $request)
    {

        $message = [
            'required' => 'Chưa nhập :attribute',
            'email' => 'Vui lòng nhập đúng định dạng email',
            'unique' => 'email Đã đăng ký'
        ];
        //validate request
        $validate = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'Fullname' => 'required|string',
            'role' => 'required',
        ], $message);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }
        $query = DB::table('users')->insert([
            'fullname' => $request->Fullname,
            'UserRole' => $request->role,
            'Active' => $request->status,
            'email' => $request->email,
            'password' => Hash::make('123456')
        ]);
        echo $query;
    }
}
