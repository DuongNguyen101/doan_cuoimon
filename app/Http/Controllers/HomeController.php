<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::withCount('products')
            ->with(['products' => function ($query) {
                $query->where('status', 1)->latest();
            }])
            ->get();

        $featuredProducts = Products::where('status', 1)
            ->withCount('reviews')
            ->withAvg('reviews', 'rating')
            ->latest()
            ->take(4)
            ->get();

        $featuredProducts2 = Products::where('status', 1)
            ->where('category_id', 2)
            ->withCount('reviews')
            ->withAvg('reviews', 'rating')
            ->latest()
            ->take(6)
            ->get();

        $featuredProducts3 = Products::where('status', 1)
            ->where('category_id', 5)
            ->withCount('reviews')
            ->withAvg('reviews', 'rating')
            ->latest()
            ->take(6)
            ->get();

        $search = request()->get('search');
        $products = Products::where('status', 1);
        if ($search) {
            $products->where('name', 'like', '%' . $search . '%');
        }
        $products = $products->paginate(12)->appends(['search' => $search]);

        return view('template.user.home.index', compact('categories', 'products', 'featuredProducts', 'featuredProducts2', 'featuredProducts3'));
    }
    
    public function addToCart($id)
{
    $product = Products::findOrFail($id);
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        if ($cart[$id]['quantity'] < $product->stock) {
            $cart[$id]['quantity']++;
        }
    } else {
        $cart[$id] = [
            'product_id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'image_url' => $product->image_url,
            'quantity' => 1,
            'stock' => $product->stock,
            'added_at' => now()->format('d M, Y'),
        ];
    }

    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Product added to cart!');
}

}
