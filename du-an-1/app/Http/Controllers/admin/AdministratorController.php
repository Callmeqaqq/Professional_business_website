<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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
        $super_admin = DB::table('users')
            ->join('role', 'UserRole', '=', 'id_role')
            ->where('users.UserId', '=', Session('LoggedUser'))
            ->value('RoleName');
        $page = 'administrator';
        return view('admin/administrator', compact('admins', 'page','super_admin'));
    }

    function add()
    {
        //check role of logging user
        $this_user_role = DB::table('users')
            ->join('role', 'UserRole', '=', 'id_role')
            ->where('users.UserId', '=', Session('LoggedUser'))
            ->value('id_role');

        //check logging user's role is supper admin or not, cuz only supper admin can create new manager or supper admin
        if ($this_user_role == 5) {
            $listRole = DB::table('role')
                ->where('RoleName', '!=', 'Customer')
                ->get();
        } else {
            $listRole = DB::table('role')
                ->where('RoleName', '!=', 'Manager')
                ->where('RoleName', '!=', 'SuperAdmin')
                ->where('RoleName', '!=', 'Customer')
                ->get();
        }
        return view('admin/addAdminstrator', compact('listRole'));
    }

    function delete($id, Request $request)
    {
        $delete = DB::table('users')->where('UserId', '=', $id)->delete();
        if ($delete) {
            $request->session()->put('status', 'success/xóa thành công');
        } else {
            $request->session()->put('status', 'danger/xóa không thành công đã có lỗi xãy ra');
        }
        return back();
    }

    function update($id)
    {
        $user = DB::table('users')
            ->select('UserRole', 'Fullname', 'Email', 'Active')
            ->where('UserId', '=', $id)
            ->first();
        $listRole = DB::table('role')->get();
        return view('admin/updateAdminstrator', compact('listRole', 'user'));
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
            ->where('Email', '=', $request->email)
            ->update([
                'fullname' => $request->Fullname,
                'UserRole' => $request->role,
                'Active' => $request->status,
            ]);
        if ($query) {
            $request->session()->put('status', 'success/Cập nhật thành công');
        } else {
            $request->session()->put('status', 'danger/Cập nhật không thành công đã có lỗi xãy ra');
        }
        return back();
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
        if ($query) {
            $request->session()->put('status', 'success/Thêm thành công');
        } else {
            $request->session()->put('status', 'danger/Thêm không thành công đã có lỗi xãy ra');
        }
        return back();
    }
}
