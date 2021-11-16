<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ApiController extends Controller
{
    function getCommentPost($id){
        $data = DB::table('blogComment')
                ->Join('blog','blog.BlogID','blogComment.postId')
                ->Join('users', 'users.UserID','blogComment.userId')
                ->Where([
                    ['blogComment.postId',$id],
                    ['blogComment.status', 1]
                ])
                ->select('users.Fullname as author','blogComment.message','blogComment.createAt as createAt')
                ->get();
        if(count($data) == 0){
            return json_encode([
                'success' => false,
                'code' => 404,
                'data' => $data,
                'message' => 'Không tìm thấy comment phù hợp',
                'count' => count($data)
            ]);
        }else{
            return json_encode([
                'success' => true,
                'code' => 200,
                'data' => $data,
                'message' => 'Lấy dữ liệu thành công',
                'count' => count($data)
            ]);
        }
    }
}
