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
        $sale = 1;
        $warehouse = 2;
        $hr = 3;
        $mng = 4;
        $sup_admin = 5;
        $staff_check = array($sale, $warehouse, $hr, $mng, $sup_admin);
        //neu co chuc nang them role thi if !=6
        if (!in_array($user_role, $staff_check)) {
            return redirect('/SoMeThInGwEnTwRoNg');
        }
        $logged_role = DB::table('users')
            ->join('role','users.UserRole', '=', 'role.id_role')
            ->where('UserId', '=', Session('LoggedUser'))
            ->value('RoleName');
        Session::put('UserRole', $logged_role);
        return $next($request);
    }
}
