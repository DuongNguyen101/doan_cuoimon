<?php

namespace App\Http\Controllers;


class ShopController extends Controller
{
    public function shoplist(){
        return view('template/user/shop/shop-list');
    }
    
    public function shopdetail(){
        return view('template/user/shop/shop-detail');
    }

    public function wishlist(){
        return view('template/user/shop/wishlist');
    }
}
