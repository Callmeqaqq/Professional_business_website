<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleBack(Request $request)
    {
        try {
            $user_google = Socialite::driver('google')->user();
            $user = DB::table('users')->where('google_id','=',$user_google->id )->first();

            if($user){
                $request->session()->put('LoggedUser',$user->UserId);
                $request->session()->put('LoggedUserName', $user->Fullname);
                $request->session()->put('LoggedEmail', $user->loginEmail);
                $request->session()->put('UserRole', $user->UserRole);
                $request->session()->put('status', 'success/Đăng nhập thành công TK '.$user->Fullname);
                return redirect($request->session()->get('backUrl'));
            }

            $newUser = DB::table('users')->insert([
                'fullname' => $user_google->name,
                'email' => $user_google->email,
                'google_id'=> $user_google->id,
                'password' => Hash::make('123456')
            ]);
            $userNew = DB::table('users')->select('UserId')->where('email','=',$user_google->email )->first();
            $request->session()->put('LoggedUser',$userNew->UserId);
            $request->session()->put('LoggedUserName', $userNew->Fullname);
            $request->session()->put('LoggedEmail', $userNew->loginEmail);
            $request->session()->put('UserRole', $userNew->UserRole);
            $request->session()->put('status', 'success/Đăng nhập thành công TK '.$userNew->Fullname);
            return redirect($request->session()->get('backUrl'));
        } catch (Exception $e) {
            $request->session()->put('status', 'danger/Đã có lỗi sảy ra,hảy thử lại sau');
        }
    }
    // login facebook
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookBack(Request $request)
    {
        try{
            //if Authentication is successfully.
            $user_facebook = Socialite::driver('facebook')->user();
            $user = DB::table('users')->where('facebook_id','=',$user_facebook->getId() )->first();

            if($user){
                $request->session()->put('LoggedUser', $user->UserId);
                $request->session()->put('LoggedUserName', $user->Fullname);
                $request->session()->put('LoggedEmail', $request->loginEmail);
                $request->session()->put('status', 'success/Đăng nhập thành công!');
                return redirect($request->session()->get('backUrl'));
            }

            $newUser = DB::table('users')->insert([
                'fullname' => $user_facebook->getName(),
                'email' => $user_facebook->getEmail(),
                'facebook_id'=> $user_facebook->getId(),
                'password' => Hash::make('123456')
            ]);
            if($newUser!== null){
                $request->session()->put('status', 'success/Đăng nhập thành công!');
            }else{
                $request->session()->put('status', 'danger/đăng nhập goodle đang bị lỗi, làm ở thử lại sau!');
            }
            $request->session()->put('LoggedUser', $newUser->UserId);
            $request->session()->put('LoggedUserName', $newUser->Fullname);
            $request->session()->put('LoggedEmail', $newUser->Email);
            return redirect($request->session()->get('backUrl'));
        }catch(\Exception $e){
            //Authentication failed
            $request->session()->put('status', 'danger/đăng nhập facebook đang bị lỗi, làm ở thử lại sau!');
            return back();
        }
    }
}
