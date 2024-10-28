<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\CheckoutController;
use Illuminate\Support\Facades\Storage;

//before login
Route::get('/', function () {
    return view('admin.layouts.main');
})->name('admin.layouts.main');

// product before login
Route::get('/admin/main', [ProductController::class, 'indexProduct'])->name('admin.layouts.product');

// after login
Route::get('/user', function () {
    return view('user.home.main');
})->name('user.home.main');



// login
Route::group([
    'prefix' => 'auth'
], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login.index');
    Route::get('/register', [AuthController::class, 'register'])->name('register.index');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('register.post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// admin manager

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function (){
    //user
    Route::group([
        'prefix' => 'user'
    ], function (){
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/show/{user}', [UserController::class, 'show'])->name('admin.user.detail');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('/update/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('/destroy/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');

    });

    //product
    Route::group([
        'prefix' => 'product',
    ], function (){
       Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
       Route::get('/create', [ProductController::class, 'create'])->name('admin.product.create');
       Route::post('/', [ProductController::class, 'store'])->name('admin.product.store');
       Route::get('/show/{product}', [ProductController::class, 'show'])->name('admin.product.detail');
       Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('admin.product.edit');
       Route::post('/update/{product}', [ProductController::class, 'update'])->name('admin.product.update');
       Route::get('/destroy/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    });

    // order

    Route::group([
        'prefix' => 'order',
    ], function (){
       Route::get('/', [OrderController:: class, 'index'])->name('admin.order.index');
       Route::get('/show/{order}', [OrderController:: class, 'show'])->name('admin.order.detail');
       Route::get('edit/{order}', [OrderController:: class, 'edit'])->name('admin.order.edit');
       Route::post('/update/{order}', [OrderController:: class, 'update'])->name('admin.order.update');
       Route::get('/destroy/{order}', [OrderController:: class, 'destroy'])->name('admin.order.destroy');
    });
});

// user use
Route::group([
    'prefix' => 'user',
], function () {

    // product
    Route::group([
        'prefix' => 'product'
    ], function () {
        Route::get('/', [IndexController::class, 'index'])->name('user.product');
    });

    // cart
    Route::group([
        'prefix' => 'cart',
        'middleware' => 'auth'
    ], function () {
        Route::get('/add/{product_id?}/{quantity?}', [ShopController::class, 'addToCart'])->name('user.cart.add');
        Route::get('/index', [CheckoutController::class, 'indexCart'])->name('user.cart.index');
        Route::get('/destroy/{id}', [CheckoutController::class, 'destroy'])->name('user.cart.destroy');
        Route::post('/update/{cart_id?}', [CheckoutController::class, 'updateCart'])->name('user.cart.update');
        Route::delete('/destroyCart/{orderId}', [CheckoutController::class, 'destroyCart'])->name('user.cart.destroyCart');


    });

    // shop
    Route::group([
        'prefix' => 'shop'
    ], function () {
        Route::get('/index', [ShopController::class, 'index'])->name('user.shop.index');

    });

    // check
    Route::group([
        'prefix' => 'checkout',
        'middleware' => 'auth'
    ], function () {
        Route::get('/index/{order_id?}', [CheckoutController::class, 'indexCheckout'])->name('user.order.checkout');
        Route::get('/order/confirmation', [CheckoutController::class, 'indexConfirmation'])->name('user.order.confirmation');
        Route::post('/create', [CheckoutController::class, 'createOrder'])->name('user.order.create');
        Route::post('/approved-order', [CheckoutController::class, 'approvedOrder'])->name('user.approvedOrder');

    });
});

