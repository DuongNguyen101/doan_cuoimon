<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
     public function login(){
        return view('template/user/pages/login');
    }

    public function register(){
        return view('template/user/pages/register');
    }
}
