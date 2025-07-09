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
        $search = request()->get('search');
        $sort = request()->get('sort');

        if ($search) {
            $query = Products::where('status', 1)
                ->where('name', 'like', '%' . $search . '%');
        } else {
            $query = Products::where('category_id', $id)
                ->where('status', 1);
        }

        if ($sort === 'asc') {
            $query->orderBy('price', 'asc');
        } elseif ($sort === 'desc') {
            $query->orderBy('price', 'desc');
        } else {
            $query->orderBy('name', 'asc');
        }

        $products = $query->paginate(12)->appends([
            'search' => $search,
            'sort' => $sort,
        ]);

        return view('template.user.shop.dryspices.index', compact('products', 'categories', 'id'));
    }


    public function searchProducts()
    {
        $categories = Categories::all();

        $query = Products::where('status', 1);

        $search = request()->get('search');
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        $sort = request()->get('sort');
        if ($sort === 'asc') {
            $query->orderBy('price', 'asc');
        } elseif ($sort === 'desc') {
            $query->orderBy('price', 'desc');
        } else {
            $query->orderBy('name', 'asc');
        }

        $products = $query->paginate(12)->appends([
            'search' => $search,
            'sort' => $sort,
        ]);

        return view('template.user.shop.dryspices.index', compact('products', 'categories'));
    }

    public function shopdetail($id = null)
{
    $categories = Categories::all();

    $product = null;
    $relatedProducts = [];

    if ($id) {
        $product = Products::find($id);
        if (!$product) {
            abort(404);
        }

        $relatedProducts = Products::where('category_id', $product->category_id)
            ->where('product_id', '!=', $product->product_id)
            ->where('status', 1)
            ->latest()
            ->take(6)
            ->get();
    }

    return view('template/user/shop/shop-detail', compact('categories', 'product', 'relatedProducts'));
}



    public function wishlist()
    {
        $categories = Categories::all();
        $wishlist = session('wishlist', []);
        return view('template/user/shop/wishlist', compact('categories', 'wishlist'));
    }

    public function cart()
    {
        $categories = Categories::all();
        return view('template/user/shop/cart', compact('categories'));
    }

    public function checkout()
    {
        $categories = Categories::all();
        return view('template/user/shop/checkout', compact('categories'));
    }

    public function addToWishlist($id)
    {
        $product = Products::findOrFail($id);

        $wishlist = session()->get('wishlist', []);

        if (isset($wishlist[$id])) {
            $wishlist[$id]['quantity'] += 1;
            session()->flash('info', 'Increase the number of products in your wishlist!');
        } else {
            $wishlist[$id] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image_url' => $product->image_url,
                'quantity' => 1,
                'added_at' => now()->format('d M, Y'),
            ];
            session()->flash('success', 'Added to favorites successfully!');
        }

        session()->put('wishlist', $wishlist);
        return redirect()->back();
    }

    public function removeFromWishlist($id)
    {
        $wishlist = session()->get('wishlist', []);

        if (isset($wishlist[$id])) {
            unset($wishlist[$id]);
            session()->put('wishlist', $wishlist);
            session()->flash('success', 'Remove product from wishlist!');
        } else {
            session()->flash('info', 'Product does not exist in wishlist!');
        }

        return redirect()->back();
    }
}
