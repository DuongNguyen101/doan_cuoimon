<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/index', [HomeController::class, 'index']);
});

Route::group(['prefix' => 'home'], function () {
    Route::get('/index', [HomeController::class, 'index']);
});

Route::group(['prefix' => 'about'], function () {
    Route::get('/index', [AboutController::class, 'index']);
});

Route::group(['prefix' => 'shop'], function () {
    Route::get('/shop-list', [ShopController::class, 'shoplist']);
});