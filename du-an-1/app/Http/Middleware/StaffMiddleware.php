<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StaffMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user_role = DB::table('users')->where('UserId', '=', Session('LoggedUser'))->value('UserRole');
        $not_staff = 6; //RoleID of customer
        if ($user_role == $not_staff) {
            return redirect('/SoMeThInGwEnTwRoNg');
        }

        $logged_role = DB::table('users')
            ->join('role','users.UserRole', '=', 'role.id_role')
            ->where('UserId', '=', Session('LoggedUser'))
            ->value('RoleName');
        Session::put('UserRole', $logged_role);

        $get_permissions = DB::table('user_per')
            ->join('permission','user_per.id_per','=','permission.id_per')
            ->select('permission.name_per')
            ->where('user_per.id_user','=',Session('LoggedUser'))
            ->get();//create + edit
        $permission = array($get_permissions);
        $full = 'Full';
        if(in_array($full, $permission)){
            Session::put($full, $full);
        }
        $view = 'View';
        $create = 'Create';
        if(in_array($create, $permission)){
            Session::put($create, $create);
        }
        $edit = 'Edit';
        if(in_array($edit, $permission)){
            Session::put($edit, $edit);
        }
        $delete = 'Delete';


//        Session::put('ArrayPermissions',[]);
//        foreach ($get_permissions as $array_permissions){
//            Session::put('ArrayPermissions',$array_permissions);
//        }

        return $next($request);
    }
}
