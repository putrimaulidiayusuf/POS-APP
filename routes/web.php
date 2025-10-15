<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('Customers', CustomerController::class);
Route::resource('orders', OrderController::class);
Route::resource('order_details', OrderDetailController::class);

Route::get('/', function () {
    return view('welcome');
});
