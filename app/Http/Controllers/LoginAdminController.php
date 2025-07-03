<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('login/admin/index');
    }

    public function logout()
    {
        return view('login/admin/logout');
    }
}