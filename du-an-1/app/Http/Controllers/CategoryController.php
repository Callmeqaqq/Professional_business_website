<?php

namespace App\Http\Controllers;
use App\Models\Category;

class CategoryController extends Controller {
    public function index() {
        $data = Category::paginate(2);
        return view('category.index', compact('data'));
    }

    //param
    public function category($id) {
        return view('category/category');
    }
}
