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

        $get_permissions = DB::table('user_per')
            ->join('permission','user_per.id_per','=','permission.id_per')
            ->select('permission.name_per')
            ->where('user_per.id_user','=',Session('LoggedUser'))
            ->get();
        $permissions = array();
        foreach ($get_permissions as $permission){
            array_push($permissions,$permission->name_per);
        }

        //set session for each permission
        $full = 'Full';
        if(in_array($full, $permissions)){
            Session::put('Full', $full);
        }
        $view = 'View';
        if(in_array($view, $permissions)){
            Session::put('View', $view);
        }
        $create = 'Create';
        if(in_array($create, $permissions)){
            Session::put('Create', $create);
        }
        $edit = 'Edit';
        if(in_array($edit, $permissions)){
            Session::put('Edit', $edit);
        }
        $delete = 'Delete';
        if(in_array($delete, $permissions)){
            Session::put('Delete', $delete);
        }

        $page = 'administrator';
        return view('admin/administrator', compact('admins', 'page'));
    }

    function add()
    {
        $listRole = DB::table('role')->get();
        return view('admin/addAdminstrator', compact('listRole'));
    }
    function delete($id,Request $request)
    {
        $delete = DB::table('users')->where('UserId','=',$id)->delete();
        if($delete){
            $request->session()->put('status', 'success/xóa thành công');
        }else{
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
        if($query){
            $request->session()->put('status', 'success/Cập nhật thành công');
        }else{
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
        if($query){
            $request->session()->put('status', 'success/Thêm thành công');
        }else{
            $request->session()->put('status', 'danger/Thêm không thành công đã có lỗi xãy ra');
        }
        return back();
    }
}
