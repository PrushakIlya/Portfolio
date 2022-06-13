<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/basket/{id}', [OrderController::class, 'order_store'])->name('order.order_store');




Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');


Route::get('/product_in_cart', [OrderController::class, 'product_in_cart'])->name('product_in_cart');
Route::get('/cart/order', [OrderController::class, 'order_index'])->name('order.order_index');
Route::post('/{product_id}', [OrderController::class, 'basket_store'])->name('order.basket_store');
Route::get('/cart', [OrderController::class, 'basket_index'])->name('order.basket_index');
Route::delete('/cart/{product_id}',[OrderController::class,'basket_delete'])->name('order.basket_delete');


Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/{category}/{product}', [ProductController::class, 'show'])->name('product.show');
