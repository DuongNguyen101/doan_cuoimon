<?php

namespace App\Http\Controllers;


class BlogController extends Controller
{
    public function bloggrid(){
        return view('template/user/blog/blog-grid');
    }

    public function blogdetail(){
        return view('template/user/blog/blog-detail');
    }
}
