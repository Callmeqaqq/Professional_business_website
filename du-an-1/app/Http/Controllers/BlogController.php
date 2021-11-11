<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    function index(){
        $data = DB::table('blog')->get();
        dd($data);
    }
    function viewBySlug($slug){
        $data = DB::table('blog')->Join('users', 'blog.UserId','users.UserId')->Where('slug',$slug)->first();
        if(isset($data)) {
            return view('postSingle', compact('data'));
        }else{
            return view('404');
        }
    }
    function showAllCategory($category){
        $data =DB::table('blog_category')->get();
        dd($data);
    }
}
