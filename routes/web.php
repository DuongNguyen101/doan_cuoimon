<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'home'], function () {
    Route::get('/index', [HomeController::class, 'index']);
});
