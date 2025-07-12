<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;

class BlogController extends Controller
{
    public function bloggrid()
    {
        $categories = Categories::all();
        $news = News::orderBy('created_at', 'desc')->get();
        return view('template/user/blog/blog-grid', compact('categories', 'news'));
    }

    public function blogdetail($id)
    {
        $categories = Categories::all(); 
        $news = News::findOrFail($id); 
        return view('template/user/blog/blog-detail', compact('categories', 'news'));
    }

}
