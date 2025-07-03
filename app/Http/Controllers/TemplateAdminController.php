<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;

class TemplateAdminController extends Controller
{
    public function dashboard(){
        $data = [
            'categories'=>Categories::get()
        ];
        return view('template/admin/dashboard')->with($data);
    }
     public function productlist($id){
        $data = [
            'products'=>Products::where('category_id','=',$id)->orderBy('created_at','desc')->get(),
            'category'=>Categories::find($id)
        ];
        return view('template/admin/productlist')->with($data);
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
