<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class ContactController extends Controller
{
   public function index(){
    $categories = Categories::all();
    return view('template/user/contact/index', compact('categories'));
}
}
