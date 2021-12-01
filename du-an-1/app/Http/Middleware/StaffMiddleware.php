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
        return $next($request);
    }
}
