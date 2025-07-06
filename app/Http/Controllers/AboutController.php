<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class AboutController extends Controller
{
    public function index(){
    $categories = Categories::all();
    return view('template/user/about/index', compact('categories'));
}
}
