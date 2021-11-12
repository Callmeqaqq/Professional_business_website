<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public $postId;
    function index(){
        $data = DB::table('blog')->Join('users', 'blog.UserId', 'users.UserId')->paginate(9);
        return view('blog', compact('data'));
    }
    function viewBySlug($slug){
        $data = DB::table('blog')->Join('users', 'blog.UserId','users.UserId')->Where('slug',$slug)->first();
        if(isset($data)) {
            $this->postId = $data->BlogID;
            $prePost = $this->getInfoPost($this->postId - 1);
            $nextPost = $this->getInfoPost($this->postId + 1);
            return view('postSingle', compact('data','prePost','nextPost'));
        }else{
            return view('404');
        }
    }
    function showAllCategory($category)
    {
        $data = DB::table('blog_category')->get();
        dd($data);
    }
    private function getInfoPost($id){
        return DB::table('blog')->Where('BlogID',$id)->first();
    }
}
