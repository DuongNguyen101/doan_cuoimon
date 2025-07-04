<?php

namespace App\Http\Controllers;


class MyAccountController extends Controller
{
    public function index(){
        return view('template/user/myaccount/index');
    }
}
