<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
{
    if (!Auth::check()) {
        return redirect()->back()->with('error', 'You must be logged in to review.');
    }

    $request->validate([
        'product_id' => 'required|exists:products,product_id',
        'rating'     => 'required|integer|min:1|max:5',
        'comment'    => 'required|string|max:1000',
    ]);

    Review::create([
        'user_id'    => Auth::id(),
        'product_id' => $request->product_id,
        'rating'     => $request->rating,
        'comment'    => $request->comment,
    ]);

    $url = route('shopdetail', ['id' => $request->product_id]) . '#nav-review';
    return redirect($url)->with('success', 'Thank you for rating this product!');

}

}
