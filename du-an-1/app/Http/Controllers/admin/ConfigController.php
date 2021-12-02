<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function config_permission(){
        $admins = DB::table('users')
            ->join('role', 'role.id_role', '=', 'users.UserRole')
            ->select('users.UserId', 'users.Fullname', 'users.Email', 'role.RoleName', 'active')
            ->where('users.UserRole', '!=', '6')
            ->get();
//        $list_permissions = DB::table('permission')->get();
        return view('admin/configuration/permissionConfig', compact('admins'));
    }

    public function get_not_have_permission($user){
        $permission_check = DB::table('user_per')
            ->join('permission','user_per.id_per','=','permission.id_per')
            ->select('permission.id_per')
            ->where('user_per.id_user','=',$user)
            ->get();//edit create view
        $test = array();
        foreach ($permission_check as $permission){
            array_push($test,$permission->id_per);
        }
        $not_exist_permission = DB::table('permission')
            ->select('id_per','name_per')
            ->whereNotIn('id_per',$test)
            ->get();//edit create view
        return $not_exist_permission;
    }

    public function update_config_permission(Request $request){
        $user = $request->input('PermissionUser');
        $permission = $request->input('PermissionAction');
        DB::table('user_per')->insert([
            'id_per' => $permission,
            'id_user' => $user,
            'licenced' => 1
        ]);
        return redirect('/admin/config-permission')->with('add_success', 'Thêm quyền thành công');
    }

    public function check_user_permission($user){
        $permission_check = DB::table('user_per')
            ->join('permission','user_per.id_per','=','permission.id_per')
            ->select('permission.name_per','permission.id_per')
            ->where('user_per.id_user','=',$user)
            ->get();
        return $permission_check;
    }

    public function get_permission_licenced($permission, $userID){
        $licenced_check = DB::table('user_per')
            ->where('id_per','=', $permission)
            ->where('id_user','=', $userID)
            ->value('licenced');
        return $licenced_check;
    }

    public function update_config_licenced(Request $request){
        $user = $request->input('LicencedUser');
        $permission = $request->input('LicencedUserPermission');
        $licenced = $request->input('LicencedStatus');

        DB::table('user_per')
            ->where('id_user','=', $user)
            ->where('id_per','=', $permission)
            ->update([
               'licenced' => $licenced
            ]);
        return redirect('/admin/config-permission')->with('licenced', 'Cập nhật giấy phép thành công!');
    }

    public function config_payment(){
        return view('admin/configuration/paymentConfig');
    }

    public function config_shipfee(){
        return view('admin/configuration/shippingConfig');
    }
}
