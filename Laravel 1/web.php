<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



// Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/categories', [AdminController::class, 'getCategories']);



// Shop
Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);

