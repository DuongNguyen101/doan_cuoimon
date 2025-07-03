<?php

namespace App\Http\Controllers;


class BlogController extends Controller
{
    public function bloggird(){
        return view('template/user/blog/blog-gird');
    }

    public function blogdetail(){
        return view('template/user/blog/blog-detail');
    }
}
