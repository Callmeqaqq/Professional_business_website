<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DeletePermission
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
        $userID = Session::get('LoggedUser');
        $action = 'DELETE';
        $permission_delete = 5; //database set
        $test = DB::table('users')
            ->join('user_per','users.UserID','=','user_per.id_user')
            ->join('permission','user_per.id_per','=','permission.id_per')
            ->join('permission_detail','permission.id_per','=','permission_detail.id_per')
            ->where('users.UserID','=', $userID)
            ->where('user_per.id_per', '=' , $permission_delete)
            ->where('user_per.licenced', '=',  '1')//giấy phép: 1 = true, 0 = false
            ->where('action_code', '=', $action)//chi tiết quyền
            ->value('check_action');
        ;
        if($test != 1){
            return redirect('/SoMeThInGwEnTwRoNg');
        }
        return $next($request);
    }
}
