<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Profile extends Controller
{

    function index($page = 'info'){
        $user = DB::table('users')->select('Email','Fullname','Address','Phone')->where('UserId','=', Session('LoggedUser'))->get()->first();
        $orders = DB::table('orders')
            ->Join('status', 'orders.StatusId', '=','status.StatusId')
            ->select('orders.OrderId','orders.CreateAt','status.*','orders.ToPay')->where('UserId','=', Session('LoggedUser'))->orderBy('OrderId','desc')->get();
        return view('profile',compact('user','page','orders'));
    }
    function update(Request $request){
        $message = [
            'required' => 'Vui lòng nhập :attribute',
            'email' => 'Vui lòng nhập đúng định dạng email',
            'password.min' => 'Các kí tự không đươc ít hơn 6',
            'password.max' => 'Các kí tự không đươc nhiều hơn 50',
            'name.min' => 'Họ và Tên không đươc ít hơn 5',
            'name.max' => 'Họ và Tên không đươc nhiều hơn 100',
        ];
        $validate = Validator::make($request->all(),[
            'name' => 'required|min:5|max:100',
            'password' => 'required|min:6|max:50',
            'email' => 'required|email',
        ],$message);
        if ($validate->fails()) {
            return redirect('profile')->withErrors($validate)->withInput();
        }
        if(isset($request->phone)){
            $pattern = "/^(0|\\+84)(\\s|\\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\\d)(\\s|\\.)?(\\d{3})(\\s|\\.)?(\\d{3})$/";
            if(!preg_match($pattern, $request->phone)){
                $request->session()->put('status', 'danger/Bạn vừa nhập vào số điện thoại hợp lệ!');
                return redirect('profile');
            }
        }
        $user = DB::table('users')->select('password','Email')->where('UserId','=', Session('LoggedUser'))->get()->first();
        $listUser = DB::table('users')->select('UserId','Email')->get();
//        dd([$listUser,$user,Session('LoggedUser')]);
        foreach ($listUser as $lUser){
            if($lUser->Email === $request->email && $lUser->UserId !== Session('LoggedUser')){
                $request->session()->put('status', 'danger/Email đã đăng ký');
                return redirect('profile');
            }
        }
        if (Hash::check($request->password,  $user->password)) {
            $query = DB::table('users')
                ->where('UserId','=', Session('LoggedUser'))
                    ->update([
                        'fullname' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'address' => $request->address,
                    ]);
            if($query !== null){
                $request->session()->put('LoggedUserName', $request->name);
                $request->session()->put('LoggedEmail', $request->email);
                $request->session()->put('status', 'success/Cập nhật thông tin thành công thành công');
            }else{
                $request->session()->put('status', 'danger/Cập nhật thất bại đã có lỗi');
            }
        }else{
            $request->session()->put('status', 'Mật khẩu không chính xác');
        }
        return redirect('profile');
    }
    function changePassword(Request $request){
        $message = [
            'password-current.required' => 'Vui lòng nhập mật khẩu hiện tại',
            'password-new.required' => 'Vui lòng nhập mật khẩu mới',
            'password_confirmation.required' => 'Vui lòng xác nhận lại mật khẩu',
            'min' => 'Các kí tự không đươc ít hơn 6',
            'max' => 'Các kí tự không đươc nhiều hơn 50',
            'same' => 'Xác nhận mật khẩu không chính xác'
        ];
        $validate = Validator::make($request->all(),[
            'password-current' => 'required|min:6|max:50',
            'password-new' => ['required','min:6','max:50','same:password_confirmation'],
            'password_confirmation' => 'required|same:password-new',
        ],$message);
        if ($validate->fails()) {
            return redirect('profile/change_pass')->withErrors($validate)->withInput()->with('page','changePassword');
        }
        $user = DB::table('users')->select('password')->where('UserId','=', Session('LoggedUser'))->get()->first();
        if (Hash::check($request['password-current'],  $user->password)) {
            $query = DB::table('users')
                ->where('UserId','=', Session('LoggedUser'))
                ->update([
                    'password' => Hash::make($request['password-new']),
                ]);
            if($request){
                $request->session()->put('status', 'success/Cập nhật mật khẩu thành công thành công');
                return redirect('profile/change_pass');
            }
                $request->session()->put('status', 'danger/Cập nhật thất bại đã có lỗi');
            return redirect('profile/change_pass');
        }else{
            $request->session()->put('status', 'danger/Mật khẩu không chính xác');
            return redirect('profile/change_pass');

        }
    }

    function OrderDetail(Request $request, $OrderId) {
        $orderDetail = DB::table('orders')
            ->Join('orderdetail', 'orders.OrderId', '=','orderdetail.OrderId')
            ->Join('product', 'orderdetail.ProductId', '=','product.ProductId')
            ->Join('variant', 'orderdetail.VariantId', '=','variant.VariantId')
            ->Where('orders.UserId', Session('LoggedUser'))
            ->Where('orders.OrderId', $OrderId)
            ->Select('variant.Color', 'variant.VariantName', 'orderdetail.Quantity', 'product.Price as ProductPrice', 'variant.Price as VariantPrice', 'orders.ShipFee' ,'orders.ShipDate', 'orders.ToPay')
            ->get();
        return view('profile/orderdetail', compact('orderDetail'));
//        dd($orderDetail);
    }
}
