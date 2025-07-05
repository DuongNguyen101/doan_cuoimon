<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Products;

class ShopController extends Controller
{
    
    public function shoplist()
    {
        $categories = Categories::select('category_id', 'name')->get();
        $products = Products::where('status', 1)->paginate(12); 

        return view('template/user/shop/shop-list', compact('categories', 'products'));
    }

    public function categoryProducts($id)
    {
        $categories = Categories::all();
        $products = Products::where('category_id', $id)->get();

        return view('template.user.shop.dryspices.index', compact('products', 'categories'));
    }


    public function shopdetail(){
        return view('template/user/shop/shop-detail');
    }

    public function wishlist(){
        return view('template/user/shop/wishlist');
    }

    public function cart(){
        return view('template/user/shop/cart');
    }

    public function checkout(){
        return view('template/user/shop/checkout');
    }
}
