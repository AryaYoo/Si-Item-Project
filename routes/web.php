<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//==================Routing list Dashboard===================
Route::get('/', function () {
    return view('dashboard');
});



//==================Routing list products====================
Route::get('/product', function () {
    return view('products/index');
});

// Route::get('products', [ProductController::class, 'index']);

Route::get('/upload', function () {
    return view('products/upload');
});



//==================Routing list user index====================
Route::get('/profile', function () {
    return view('user/index');
});

//==================Routing list admin dasboard===============
Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/order', function () {
    return view('admin/confirm');
});

//==================Routing list admin dasboard===============
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
