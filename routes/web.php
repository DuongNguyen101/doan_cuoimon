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
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ReviewController;

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
    Route::get('/shop/shop-list', [ShopController::class, 'shoplist'])->name('shop.list');

    Route::get('/shop/detail/{id}', [ShopController::class, 'shopdetail'])->name('shopdetail');

    Route::get('/shop/wishlist', [ShopController::class, 'wishlist']);
    Route::get('/shop/wishlist/add/{id}', [ShopController::class, 'addToWishlist'])->name('wishlist.add');
    Route::post('/shop/wishlist/add/{id}', [ShopController::class, 'addToWishlist'])->name('wishlist.add');

    Route::get('/shop/wishlist/remove/{id}', [ShopController::class, 'removeFromWishlist'])->name('wishlist.remove');

    Route::get('/shop/cart', [ShopController::class, 'cart'])->name('cart');
    Route::get('/shop/checkout', [ShopController::class, 'checkout']);
    Route::post('/shop/checkout', [ShopController::class, 'checkout']);

    Route::get('/shop/category/{id}', [ShopController::class, 'categoryProducts'])->name('shop.category');
    Route::get('/shop/search', [ShopController::class, 'searchProducts'])->name('shop.search');

    Route::get('/shop/cart/add/{id}', [ShopController::class, 'addToCart'])->name('cart.add');

    Route::get('/shop/cart/remove/{id}', [ShopController::class, 'removeFromCart'])->name('cart.remove');

    Route::get('/shop/cart/increase/{id}', [ShopController::class, 'increaseQuantity'])->name('cart.increase');
    Route::get('/shop/cart/decrease/{id}', [ShopController::class, 'decreaseQuantity'])->name('cart.decrease');

    Route::post('/cart/update-quantities', [ShopController::class, 'updateQuantities'])->name('cart.update.quantities');
    Route::post('/shop/cart/update', [ShopController::class, 'updateCart'])->name('cart.update');
});



Route::group(['prefix' => 'template/user'], function () {
    Route::get('/blog/blog-grid', [BlogController::class, 'bloggrid']);
    Route::get('/blog/blog-detail/{id}', [BlogController::class, 'blogdetail']);
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



Route::group(['prefix' => 'template/admin', 'middleware' => ['auth:admin', 'check.admin']], function () {
    Route::get('/dashboard', [TemplateAdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/products', [TemplateAdminController::class, 'products'])->name('admin.dashboard');
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
    Route::get('/customers', [TemplateAdminController::class, 'customerlist'])->name('admin.dashboard');
    Route::get('/user/{id}', [TemplateAdminController::class, 'orderlist']);
    Route::get('/user/form/{id}', [TemplateAdminController::class, 'loadformuser']);
    Route::post('/user/form/action', [TemplateAdminController::class, 'updateuser']);
    Route::get('/user/form/add', [TemplateAdminController::class, 'loadformuseradd']);
    Route::get('/user/delete/{id}', [TemplateAdminController::class, 'deleteuser']);
    //oders
    Route::get('/user/order/{id}/{od}', [TemplateAdminController::class, 'orderdetail']);
    Route::get('/order/form/{id}', [TemplateAdminController::class, 'loadFormOrder']);
    Route::get('/order/form/add', [TemplateAdminController::class, 'loadFormOrderAdd']);
    Route::post('/order/update/{id?}', [TemplateAdminController::class, 'updateOrder'])->name('order.update');
    Route::get('/order/delete/{id}', [TemplateAdminController::class, 'deleteOrder']);
    Route::get('/approve', [TemplateAdminController::class, 'orderapprove']);
    Route::get('/orderpending', [TemplateAdminController::class, 'orderpending']);
    Route::get('/orderresolved', [TemplateAdminController::class, 'orderresolved']);
    Route::get('/ordercancelled', [TemplateAdminController::class, 'ordercancelled']);
    Route::get('/orderresolved', [TemplateAdminController::class, 'orderresolved']);
    Route::get('/orderconfirmed', [TemplateAdminController::class, 'orderconfirmed']);
    //search
    Route::get('/searchcategories', [TemplateAdminController::class, 'searchcategories'])->name('search');
    Route::get('/searchproducts', [TemplateAdminController::class, 'searchproducts'])->name('search');
    Route::get('/searchcustomers', [TemplateAdminController::class, 'searchcustomers'])->name('search');
    // OrderDetails
    Route::get('/orderdetails/form/{id}', [TemplateAdminController::class, 'loadFormOrderDetails']);
    Route::get('/orderdetails/form/add', [TemplateAdminController::class, 'loadFormOrderDetailsAdd']);
    Route::post('/orderdetails/update/{id?}', [TemplateAdminController::class, 'updateOrderDetails'])->name('orderdetails.update');
    Route::get('/orderdetails/delete/{id}', [TemplateAdminController::class, 'deleteOrderDetails']);
    //news
    Route::get('/news', [TemplateAdminController::class, 'news']);
    Route::get('/news/form/{id}', [TemplateAdminController::class, 'loadFormNews']);
    Route::get('/news/form/add', [TemplateAdminController::class, 'loadFormNewsAdd']);
    Route::post('/news/update/{id?}', [TemplateAdminController::class, 'updateNews'])->name('news.update');
    Route::get('/news/delete/{id}', [TemplateAdminController::class, 'deleteNews']);
    //payments
    Route::get('/payments', [TemplateAdminController::class, 'payments']);
    Route::get('/payments/form/{id}', [TemplateAdminController::class, 'loadFormPayments']);
    Route::get('/payments/form/add', [TemplateAdminController::class, 'loadFormPaymentsAdd']);
    Route::post('/payments/update/{id?}', [TemplateAdminController::class, 'updatePayments'])->name('payments.update');
    Route::get('/payments/delete/{id}', [TemplateAdminController::class, 'deletePayments']);
    //promotions
    Route::get('/promotions', [TemplateAdminController::class, 'promotions']);
    Route::get('/promotions/form/{id}', [TemplateAdminController::class, 'loadFormPromotions']);
    Route::get('/promotions/form/add', [TemplateAdminController::class, 'loadFormPromotionsAdd']);
    Route::post('/promotions/update/{id?}', [TemplateAdminController::class, 'updatePromotions'])->name('promotions.update');
    Route::get('/promotions/delete/{id}', [TemplateAdminController::class, 'deletePromotions']);
    //reviews
    Route::get('/reviews', [TemplateAdminController::class, 'reviews']);
    Route::get('/reviews/form/{id}', [TemplateAdminController::class, 'loadFormReviews']);
    Route::get('/reviews/form/add', [TemplateAdminController::class, 'loadFormReviewsAdd']);
    Route::post('/reviews/update/{id?}', [TemplateAdminController::class, 'updateReviews'])->name('reviews.update');
    Route::get('/reviews/delete/{id}', [TemplateAdminController::class, 'deleteReviews']);
    //qna
    Route::get('/qna', [TemplateAdminController::class, 'qna']);
    Route::get('/qna/form/{id}', [TemplateAdminController::class, 'loadFormQna']);
    Route::get('/qna/form/add', [TemplateAdminController::class, 'loadFormQnaAdd']);
    Route::post('/qna/update/{id?}', [TemplateAdminController::class, 'updateQna'])->name('qna.update');
    Route::get('/qna/delete/{id}', [TemplateAdminController::class, 'deleteQna']);
    //about
    Route::get('/about', [TemplateAdminController::class, 'about']);
    Route::get('/about/form/{id}', [TemplateAdminController::class, 'loadFormAbout']);
    Route::post('/about/update/{id?}', [TemplateAdminController::class, 'updateAbout'])->name('about.update');
    //manage products
    Route::get('/products/in', [TemplateAdminController::class, 'productsin']);
    Route::get('/products/out', [TemplateAdminController::class, 'productsout']);
    Route::get('/products/sold', [TemplateAdminController::class, 'productssold']);
    Route::get('/products/discounted', [TemplateAdminController::class, 'productsdiscounted']);
    Route::get('/products/detail', [TemplateAdminController::class, 'productsdetail']);
    //manage user address
    Route::get('/useraddress/form/{id}', [TemplateAdminController::class, 'loadformuseraddress']);
    Route::post('/address/update/{id?}', [TemplateAdminController::class, 'updateAddress'])->name('address.update');
});

Route::get('/email/verify', [VerificationController::class, 'notice'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');

Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/user/update', [UserInfoController::class, 'update'])->name('user.update');

Route::group(['prefix' => 'template/user'], function () {
    Route::post('/review/store', [ReviewController::class, 'store'])->name('reviews.store');
});

Route::get('/order/redirect-to-payment', [PaymentController::class, 'redirectToVnpay'])->name('order.redirect');

Route::get('/vnpay/return', [PaymentController::class, 'vnpay_return'])->name('vnpay.return');

Route::get('/order/cancel', [PaymentController::class, 'cancelOrder'])->name('order.cancel');
