<?php

namespace App\Http\Controllers;


class AboutController extends Controller
{
    public function index(){
        return view('template/user/about/index');
    }
}
