<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function register(){
        return view('template/user/pages/register');
    }
}
