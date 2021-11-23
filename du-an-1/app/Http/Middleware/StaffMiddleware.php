<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user_role = DB::table('users')->where('UserId','=', Session('LoggedUser'))->value('role');
//        $user = 0;
        $sale = 1; $warehouse = 2; $hr = 3; $mng = 4; $sup_admin = 5;
        $staff_check = array($sale, $warehouse, $hr, $mng, $sup_admin);
        if(!in_array($user_role, $staff_check)){
            return redirect('/unknown_permissions')->with("!!");
        }else{
            switch ($staff_check){
                case 1:
//                    return redirect('/unknown_permissions')->with("!!");
                    break;
                case 2:
//                    return redirect('/unknown_permissions')->with("!!");
                    break;
                case 3:
//                    return redirect('/unknown_permissions')->with("!!");
                    break;
                case 4:
//                    return redirect('/unknown_permissions')->with("!!");
                    break;
                case 5:
//                    return redirect('/unknown_permissions')->with("!!");
                    break;
            }
        }
        return $next($request);
    }
}
