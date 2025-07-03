<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TemplateAdminController;
use App\Http\Controllers\TemplateController;
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
    Route::get('/shop/checkout', [ShopController::class, 'checkout']);
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/blog/blog-gird', [BlogController::class, 'bloggird']);
    Route::get('/blog/blog-detail', [BlogController::class, 'blogdetail']);
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/pages/register', [PagesController::class, 'register']);
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/contact/index', [ContactController::class, 'index']);
});

Route::group(['prefix' => 'login/admin'], function () {
    Route::get('/index', [LoginAdminController::class, 'index']);
    Route::post('/index', [LoginAdminController::class, 'login']);  
    Route::post('/logout', [LoginAdminController::class, 'logout']);
});

Route::group(['prefix' => 'template/admin'], function () {
    Route::get('/dashboard', [TemplateAdminController::class, 'dashboard']);
});


