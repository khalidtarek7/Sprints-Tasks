<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// /admin/
Route::get('/admin', [AdminController::class, 'index']);

// /admin/categories
Route::prefix("/admin")->group(function () {
  Route::resource('categories', CategoriesController::class);
  Route::resource('products', ProductController::class);
});


// Shop
Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);

