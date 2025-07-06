<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy danh mục cùng sản phẩm liên quan
        $categories = Categories::withCount('products')
            ->with(['products' => function ($query) {
                $query->where('status', 1)->latest();
            }])
            ->get();

        // Lấy sản phẩm nổi bật (4 sản phẩm đầu tiên)
        $featuredProducts = Products::where('status', 1)
            ->latest()
            ->take(4)
            ->get();

        // Lấy sản phẩm có tìm kiếm (search) nếu có
        $search = request()->get('search');
        $products = Products::where('status', 1);
        if ($search) {
            $products->where('name', 'like', '%' . $search . '%');
        }
        $products = $products->paginate(12)->appends(['search' => $search]);

        // Truyền cả 3 biến ra view
        return view('template.user.home.index', compact('categories', 'products', 'featuredProducts'));
    }
}
