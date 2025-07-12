<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{

    public function shoplist()
    {
        $categories = Categories::select('category_id', 'name')->get();

        $products = Products::where('status', 1)
            ->withCount('reviews')
            ->withAvg('reviews', 'rating')
            ->paginate(12);

        return view('template/user/shop/shop-list', compact('categories', 'products'));
    }

    public function categoryProducts($id)
    {
        $categories = Categories::all();
        $search = request()->get('search');
        $sort = request()->get('sort');

        if ($search) {
            $query = Products::where('status', 1)
                ->where('name', 'like', '%' . $search . '%')
                ->withCount('reviews')
                ->withAvg('reviews', 'rating');
        } else {
            $query = Products::where('category_id', $id)
                ->withCount('reviews')
                ->withAvg('reviews', 'rating')
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

        $query = Products::withCount('reviews')
            ->withAvg('reviews', 'rating')
            ->where('status', 1);

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
            $product = Products::with(['reviews.user'])->find($id);
            if (!$product) {
                abort(404);
            }

            $relatedProducts = Products::where('category_id', $product->category_id)
                ->where('product_id', '!=', $product->product_id)
                ->where('status', 1)
                ->withCount('reviews')
                ->withAvg('reviews', 'rating')
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
        $cart = session('cart', []);
        $categories = Categories::all();
        return view('template.user.shop.cart', compact('categories', 'cart'));
    }

    public function checkout()
    {
        $categories = Categories::all();
        $cart = session('cart', []); 

        $user = auth()->check() ? auth()->user() : null;
        $userAddress = $user?->userAddress; 

        return view('template/user/shop/checkout', compact('categories', 'user', 'userAddress', 'cart'));
    }

    public function addToWishlist($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('warning', 'Please login to add products to your wishlist.');
        }

        $product = Products::where('product_id', $id)->first();
        if (!$product) {
            return redirect()->back()->with('info', 'Product does not exist.');
        }
        if (!$product) {
            return redirect()->back()->with('info', 'Product does not exist.');
        }

        $wishlist = session()->get('wishlist', []);

        $wishlist[$id] = [
            'product_id' => $product->id,
            'name'       => $product->name,
            'price'      => $product->price,
            'image_url'  => $product->image_url,
            'quantity'   => 1,
            'stock'      => $product->stock, 
            'added_at'   => now()->format('d M, Y'),
        ];

        session()->put('wishlist', $wishlist);

        return redirect()->back()->with('success', 'Added to wishlist successfully!');
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

    public function addToCart($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('warning', 'Please login to add products to cart.');
        }

        $product = Products::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            if ($cart[$id]['quantity'] < $product->stock) {
                $cart[$id]['quantity'] += 1;
            }
        } else {
            $cart[$id] = [
                'product_id' => $product->id,
                'name'       => $product->name,
                'price'      => $product->price,
                'image_url'  => $product->image_url,
                'quantity'   => 1,
                'stock'      => $product->stock,
                'added_at'   => now()->format('d M, Y'),
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart!');
    }


    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            session()->flash('success', 'Product removed from cart!');
        } else {
            session()->flash('info', 'Product not found in cart.');
        }

        return redirect()->route('cart');
    }

    public function increaseQuantity($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
            session()->put('cart', $cart);
        }
        return redirect()->route('cart');
    }

    public function decreaseQuantity($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] -= 1;

            if ($cart[$id]['quantity'] < 1) {
                unset($cart[$id]);
            }

            session()->put('cart', $cart);
        }
        return redirect()->route('cart');
    }

    
}
