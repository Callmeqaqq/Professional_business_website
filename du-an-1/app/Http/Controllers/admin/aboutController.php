<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class aboutController extends Controller
{
    function index(){
        $data = DB::table('about')
                ->select('content')
                ->first();
        return view('admin.about', compact('data'));
    }

    function update(Request $request){
        $content = $request->input('content');
        $rs = [
            "success" => false,
            "code" => 200,
            "messages" => "Có lỗi trong quá trình xử lý"
        ];
        if($content != null && $content != ""){
            $affected = DB::table('about')
            ->where('AboutID', 1)
            ->update([
                'content' => $content
            ]);
            $rs = [
                "success" => true,
                "code" => 200,
                "messages" => "Cập nhật thành công"
            ];
        }else{
            $rs['mesages'] = "Bạn chưa nhập nội dung";
        }
        return response()->json($rs);
    }
}
