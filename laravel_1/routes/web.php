<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\CatalogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\CatalogCategoryController;
use App\Http\Controllers\CategorySubcategoryController;
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

Route::get('/', [FrontController::class, 'index']);

Route::get('/admin', [BaseController::class, 'index'])->name('admin.index');

Route::prefix('admin')->group(function () {
  Route::get('/catalog', [CatalogController::class, 'index'])->name('admin.catalog.index');
  Route::get('/catalog/create', [CatalogController::class, 'create'])->name('admin.catalog.create');
  Route::post('/catalog', [CatalogController::class, 'store'])->name('admin.catalog.store');
  Route::get('/catalog/{id}', [CatalogController::class, 'show'])->name('admin.catalog.show');
  Route::get('/catalog/{id}/edit', [CatalogController::class, 'edit'])->name('admin.catalog.edit');
  Route::put('/catalog/{id}', [CatalogController::class, 'update'])->name('admin.catalog.update');
  Route::delete('/catalog/{id}', [CatalogController::class, 'destroy'])->name('admin.catalog.destroy');
  Route::get('/catalog/category/{id}', [CatalogController::class, 'category'])->name('admin.catalog.category');
});

Route::prefix('admin')->group(function () {
  Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
  Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
  Route::post('/category', [CategoryController::class, 'store'])->name('admin.category.store');
  Route::post('/category/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
  Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
  Route::put('/category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
  Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
  Route::get('/category/subcategory/{id}', [CategoryController::class, 'subcategory'])->name('admin.category.subcategory');
});

Route::resource('/admin/subcategory', SubcategoryController::class)->names('admin.subcategory');
Route::get('/admin/subcategory/back', [SubcategoryController::class, 'back'])->name('admin.subcategory.back');

Route::resource('/admin/product', ProductController::class)->names('admin.product');








