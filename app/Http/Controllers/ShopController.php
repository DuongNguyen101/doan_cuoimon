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

        $query = Products::where('category_id', $id)->where('status', 1);

        $sort = request()->get('sort');
        if ($sort === 'asc') {
            $query->orderBy('price', 'asc');
        } elseif ($sort === 'desc') {
            $query->orderBy('price', 'desc');
        }

        $products = $query->paginate(12)->appends(['sort' => $sort]);

        return view('template.user.shop.dryspices.index', compact('products', 'categories'));
    }



    public function shopdetail(){
        return view('template/user/shop/shop-detail');
    }

    public function wishlist(){
    $categories = Categories::all(); // thêm dòng này
    return view('template/user/shop/wishlist', compact('categories')); // truyền vào view
}

    public function cart(){
    $categories = Categories::all();
    return view('template/user/shop/cart', compact('categories'));
}

    public function checkout(){
    $categories = Categories::all();
    return view('template/user/shop/checkout', compact('categories'));
}
}
