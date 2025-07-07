<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class MyAccountController extends Controller
{
    public function index(){

        $categories = Categories::all(); 
        return view('template/user/myaccount/index', compact('categories'));
    }
}
