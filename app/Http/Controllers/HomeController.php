<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::select('name')->get();

        return view('template/user/home/index', compact('categories'));
    }
}
