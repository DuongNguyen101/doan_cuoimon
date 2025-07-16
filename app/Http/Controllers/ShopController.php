<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationMail;
use App\Models\Categories;
use App\Models\OrderDetails;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $products = $query->paginate(6)->appends([
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

public function checkout(Request $request)
    {
        if ($request->isMethod('post')) {
            $total = $request->input('total') / 100;
            $user = auth()->user();
            $cart = session('cart', []);

            $order = Orders::create([
                'user_id' => $user->id,
                'total_amount' => $total,
                'status' => 'pending',
                'address' => $user->userAddress->address ?? 'No address provided',
                'order_date' => now(), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($cart as $item) {
                OrderDetails::create([
                    'order_id'   => $order->order_id,
                    'product_id' => $item['product_id'],
                    'quantity'   => $item['quantity'],
                    'unit_price' => $item['price'],
                    'subtotal'   => $item['quantity'] * $item['price'],
                ]);
            }

            $orderDetails = OrderDetails::with('product')
                ->where('order_id', $order->order_id)
                ->get();

            Mail::to($user->email)->send(new OrderConfirmationMail($user, $order, $orderDetails));
            session()->forget('cart'); 

            return redirect()->back()->with('check_email', 'Please check your email: ' . $user->email . ' for order confirmation.');
        }

        $categories = Categories::all();
        $cart = session('cart', []); 
        $user = auth()->check() ? auth()->user() : null;
        $userAddress = $user?->userAddress;

        return view('template/user/shop/checkout', compact('categories', 'user', 'userAddress', 'cart'));
    }

public function addToWishlist($id)
{
    $product = Products::findOrFail($id); 


    $wishlist = session()->get('wishlist', []);

    $wishlist[$id] = [
        'product_id' => $product->product_id,
        'name'       => $product->name,
        'price'      => $product->price,
        'image_url'  => $product->image_url,
        'added_at'   => now()->format('d M, Y'),
        'quantity'   => 1,
    ];

    session()->put('wishlist', $wishlist);

    return redirect()->back()->with('success', 'Product added to wishlist!');
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
            'product_id' => $product->product_id,
            'name'       => $product->name,
            'price'      => $product->price,
            'image_url'  => $product->image_url, 
            'quantity'   => 1,
            'stock'      => $product->stock,
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

    public function updateQuantities(Request $request)
    {
        $quantities = $request->input('quantities');
        $cart = session()->get('cart', []);

        foreach ($quantities as $productId => $qty) {
            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] = max(1, (int)$qty); 
            }
        }

        session()->put('cart', $cart);

        return response()->json(['success' => true]);
    }

    public function updateCart(Request $request)
    {
        $quantities = $request->input('quantities');
        $cart = session('cart', []);

        foreach ($quantities as $productId => $qty) {
            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] = max(1, (int)$qty);
            }
        }

        session(['cart' => $cart]);

        return redirect()->back()->with('info', 'Cart updated successfully!');
    }



}
