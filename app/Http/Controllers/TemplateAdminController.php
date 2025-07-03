<?php

namespace App\Http\Controllers;


class TemplateAdminController extends Controller
{
    public function dashboard(){
        return view('template/admin/dashboard');
    }

    public function icon(){
        return view('template/admin/icon');
    }

    public function maps(){
        return view('template/admin/maps');
    }

    public function notifications(){
        return view('template/admin/notifications');
    }

    public function user(){
        return view('template/admin/user');
    }

    public function table(){
        return view('template/admin/table');
    }

    public function typography(){
        return view('template/admin/typography');
    }

    public function upgrade(){
        return view('template/admin/upgrade');
    }
}
