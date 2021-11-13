<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public $postId;
    function index(){
        $data = DB::table('blog')
            ->Join('users', 'blog.UserId', 'users.UserId')
            ->Join('blog_category', 'blog.Blog_CategoryID','blog_category.Blog_CategoryID')
            ->select('blog_category.*','blog.*','users.Fullname','blog.slug as blogSlug', 'blog_category.slug as categorySlug')
            ->paginate(9);
        return view('blog', compact('data'));
    }
    function viewBySlug($Category, $slug){
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
    function viewByCategory($category)
    {
        $data = DB::table('blog_category')
            ->Join('blog', 'blog.Blog_CategoryID','blog_category.Blog_CategoryID')
            ->Join('users', 'blog.UserId','users.UserId')
            ->Where('blog_category.slug',$category)
            ->select('blog_category.*','blog.*','users.Fullname','blog.slug as blogSlug', 'blog_category.slug as categorySlug')
            ->paginate(9);
            return view('blog',compact('data'));
    }
    private function getInfoPost($id){
        return DB::table('blog')->Where('BlogID',$id)
        ->Join('blog_category','blog.Blog_CategoryID','blog_category.Blog_CategoryID')
        ->Select('blog_category.slug as categorySlug','blog.*')
        ->first();
    }
}
