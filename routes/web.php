<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index']);
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/home/index', [HomeController::class, 'index']);
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/about/index', [AboutController::class, 'index']);
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/shop/shop-list', [ShopController::class, 'shoplist']);
    Route::get('/shop/shop-detail', [ShopController::class, 'shopdetail']);
    Route::get('/shop/wishlist', [ShopController::class, 'wishlist']);
    Route::get('/shop/cart', [ShopController::class, 'cart']);
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/blog/blog-gird', [BlogController::class, 'bloggird']);
});