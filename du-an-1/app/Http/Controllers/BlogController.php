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
        return view('blog/blog', compact('data'));
    }
    function viewBySlug($Category, $slug){
        $data = DB::table('blog')->Join('users', 'blog.UserId','users.UserId')
            ->Join('blog_category','blog.Blog_CategoryID', 'blog_category.Blog_CategoryID')
            ->Where('blog.slug',$slug)
            ->Select('blog.*','users.*','blog_category.slug as categorySlug','blog_category.BlogName as BlogName')
            ->first();
        if(isset($data)) {
            $this->postId = $data->BlogID;
            $prePost = $this->getInfoPost($this->postId - 1);
            $nextPost = $this->getInfoPost($this->postId + 1);
            $commentData = $this->getComments($this->postId);
            return view('blog/postSingle', compact('data','prePost','nextPost','commentData'));
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
        $categoryData = DB::table('blog_category')
            ->Where('slug',$category)
            ->first();
        return view('blog/blog',compact('data','categoryData'));
    }
    private function getInfoPost($id){
        return DB::table('blog')->Where('BlogID',$id)
        ->Join('blog_category','blog.Blog_CategoryID','blog_category.Blog_CategoryID')
        ->Select('blog_category.slug as categorySlug','blog.*')
        ->first();
    }
    private function getComments($blogId){
        return DB::table('blogComment')
        ->Join('users', 'users.UserId', 'blogComment.userId')
        ->Where([
            ['blogComment.postId',$blogId],
            ['blogComment.status', 1]
        ])
        ->Select('users.Fullname as Fullname', 'blogComment.createAt as createAt','message','blogComment.userId')
        ->paginate(6);
    }
}
