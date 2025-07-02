<?php

namespace App\Http\Controllers;


class ShopController extends Controller
{
    public function shoplist(){
        return view('shop/shop-list');
    }
}
