<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministratorController extends Controller
{
    function index(){
        $admins = DB::table('users')
            ->join('role','role.id_role','=','users.UserRole')
            ->select('users.Fullname','users.Email','role.RoleName','active')
            ->where('users.UserRole' , '!=','6')
            ->get();

        $page = 'administrator';
        return view('admin/administrator',compact('admins','page'));

    }
    function add(){
        $listRole = DB::table('role')->get();
        return view('admin/addAdminstrator',compact('listRole'));
    }
}
