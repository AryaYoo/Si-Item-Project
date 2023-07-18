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



//==================Routing list user index====================
Route::get('/profile', function () {
    return view('user/index');
});

 //==================Routing list admin dasboard==============
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/login', [LoginController::class, 'authenticate']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::redirect('/', '/login');

