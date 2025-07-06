<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class BlogController extends Controller
{
    public function bloggrid(){
    $categories = Categories::all();
    return view('template/user/blog/blog-grid', compact('categories'));
}

    public function blogdetail(){
        return view('template/user/blog/blog-detail');
    }
}
