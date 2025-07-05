<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TemplateAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\ResetPasswordController;

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index']);
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/home/index', [HomeController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('user.home');
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
    Route::get('/shop/detail/{id}', [ShopController::class, 'shopdetail'])->name('shopdetail');
    Route::get('/shop/category/{id}', [ShopController::class, 'categoryProducts'])->name('shop.category');
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/blog/blog-grid', [BlogController::class, 'bloggrid']);
    Route::get('/blog/blog-detail', [BlogController::class, 'blogdetail']);
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/pages/login', [PagesController::class, 'login'])->name('login');
    Route::post('/pages/login', [PagesController::class, 'postlogin']);
    Route::get('/pages/register', [PagesController::class, 'register']);
    Route::post('/pages/register', [PagesController::class, 'postregister']);
    Route::post('/pages/logout', [PagesController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/contact/index', [ContactController::class, 'index']);
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/myaccount/index', [MyAccountController::class, 'index']);
});

Route::group(['prefix' => 'template/user'], function () {
    Route::get('/changepassword/index', [ChangePasswordController::class, 'index']);
    Route::post('/changepassword/update', [ChangePasswordController::class, 'update'])->name('user.changePassword');
});

Route::group(['prefix' => 'template/user', 'middleware' => 'guest'], function () {
    Route::get('/pages/forgotpassword', [ForgotPasswordController::class, 'index'])->name('password.request');
    Route::post('/pages/forgotpassword', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
});

Route::group(['prefix' => 'template/user', 'middleware' => 'guest'], function () {
    Route::get('/pages/resetpassword', [ResetPasswordController::class, 'index'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
});

Route::group(['prefix' => 'login/admin'], function () {
    Route::get('/index', [LoginAdminController::class, 'index'])->name('admin.login');
    Route::post('/index', [LoginAdminController::class, 'postloginadmin']);
    Route::post('/logout', [LoginAdminController::class, 'postlogoutadmin'])->name('admin.logout');
});



Route::group(['prefix' => 'template/admin', 'middleware' => ['auth', 'check.admin']], function () {
    Route::get('/dashboard', [TemplateAdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/icon', [TemplateAdminController::class, 'icon']);
    Route::get('/maps', [TemplateAdminController::class, 'maps']);
    Route::get('/notifications', [TemplateAdminController::class, 'notifications']);
    Route::get('/user', [TemplateAdminController::class, 'user']);
    Route::get('/table', [TemplateAdminController::class, 'table']);
    Route::get('/typography', [TemplateAdminController::class, 'typography']);
    Route::get('/upgrade', [TemplateAdminController::class, 'upgrade']);
    Route::get('/dashboard/{id}', [TemplateAdminController::class, 'productlist']);
    Route::get('/dashboard/form/{id}', [TemplateAdminController::class, 'loadformcate']);
    Route::get('/dashboard/form/add', [TemplateAdminController::class, 'loadformcate_add']);
    Route::post('/dashboard/form/action', [TemplateAdminController::class, 'updatecategories']);
    Route::get('/dashboard/form/delete/{id}', [TemplateAdminController::class, 'deletecategories']);
    Route::get('/product/form/{id}', [TemplateAdminController::class, 'loadformproduct']);
    Route::get('/product/form/add/{id}', [TemplateAdminController::class, 'loadformproductadd']);
    Route::post('/product/update', [TemplateAdminController::class, 'updateproduct']);
    Route::get('/product/delete/{id}', [TemplateAdminController::class, 'deleteproduct']);
    Route::get('/user', [TemplateAdminController::class, 'orderdata'])->name('admin.dashboard');
    Route::get('/user/{id}', [TemplateAdminController::class, 'orderlist']);
    Route::get('/user/form/{id}', [TemplateAdminController::class, 'loadformuser']);
    Route::post('/user/form/action', [TemplateAdminController::class, 'updateuser']);
    Route::get('/user/form/add', [TemplateAdminController::class, 'loadformuseradd']);
    Route::get('/user/delete/{id}', [TemplateAdminController::class, 'deleteuser']);
    Route::get('/user/order/{id}/{od}', [TemplateAdminController::class, 'orderdetail']);
    Route::get('/search', [TemplateAdminController::class, 'search'])->name('admin.search');
    // OrderDetails
    Route::get('/orderdetails/form/{id}', [TemplateAdminController::class, 'loadFormOrderDetails']);
    Route::get('/orderdetails/form/add', [TemplateAdminController::class, 'loadFormOrderDetailsAdd']);
    Route::post('/orderdetails/update/{id?}', [TemplateAdminController::class, 'updateOrderDetails'])->name('orderdetails.update');
    Route::get('/orderdetails/delete/{id}', [TemplateAdminController::class, 'deleteOrderDetails']);
    //news
    Route::get('/news', [TemplateAdminController::class, 'news']);
    //payments
    Route::get('/payments', [TemplateAdminController::class, 'payments']);
    //promotions
    Route::get('/promotions', [TemplateAdminController::class, 'promotions']);
});

Route::get('/email/verify', [VerificationController::class, 'notice'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');

Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/user/update', [UserInfoController::class, 'update'])->name('user.update');
