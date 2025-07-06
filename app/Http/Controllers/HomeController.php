<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::all();

        // Xử lý tìm kiếm sản phẩm
        $search = request()->get('search');
        $products = Products::where('status', 1);

        if ($search) {
            $products->where('name', 'like', '%' . $search . '%');
        }

        $products = $products->paginate(12)->appends(['search' => $search]);

        return view('template.user.home.index', compact('categories', 'products'));
    }
}
