<?php

use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [SiteController::class, 'index'])->name("home");
Route::get('/products/{category_id?}', [SiteController::class, 'producto'])->name("productos");
Route::get('/cart', [SiteController::class, 'carrito'])->name("carrito");
Route::get('/checkout', [SiteController::class, 'checkout'])->name("checkout");
Route::get('/account', [SiteController::class, 'my_account'])->name("my_account");

Route::get('/product-detail/{id}', [SiteController::class, 'product_details'])->name("product_details");
Route::get('/productByCategory', [SiteController::class, 'productByCategory'])->name("productByCategory");
Route::resource('contact', ContactController::class);
Route::resource('review',ReviewController::class);
Route::get('/admin/products',[AdminProductsController::class,'index'])->name("admin.products");

Route::get('/profile', [SiteController::class, 'profile']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/services', [SiteController::class, 'service']);

Route::get('/greeting', function () {
    return 'hello world';
});

/*
Route::get('/user/{id}', function (string $id){
    return 'User ' . $id;
});
*/
