<?php

namespace App\Http\Controllers;


class TemplateAdminController extends Controller
{
    public function dashboard(){
        return view('template/admin/dashboard');
    }
}
