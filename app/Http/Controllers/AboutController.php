<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\About; 

class AboutController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $abouts = About::all(); 

        return view('template/user/about/index', compact('categories', 'abouts'));
    }
}
