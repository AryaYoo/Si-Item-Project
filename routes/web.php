<?php

use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;


// //==================Routing list Dashboard===================
// Route::get('/', function () {
//     return view('dashboard');
// });



// //==================Routing list products====================
// Route::get('/product', function () {
//     return view('products/index');
// });
// // Route::get('products', [ProductController::class, 'index']);

// Route::get('/upload', function () {
//     return view('products/upload');
// });



// //==================Routing list user index====================
// Route::get('/profile', function () {
//     return view('user/index');
// });

// //==================Routing list admin dasboard===============
// Route::get('/admin', function () {
//     return view('admin/dashboard');
// });

// Route::get('/order', function () {
//     return view('admin/confirm');
// });

// //==================Routing list admin dasboard===============
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {

    $id = Auth::id();
    $user = User::where('id', $id)->first();
    // dd($user);

    $view_data = [
        'user' => $user,
    ];

    return view('welcome', $view_data);
});

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);
Route::get('profile/{id}', [UserController::class, 'view']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');

Route::get('products', [ProductController::class, 'index']);
Route::get('products/create', [ProductController::class, 'create']);
Route::get('products/{category}', [ProductController::class, 'view']); // ketika
Route::get('products/{category}/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{category}/{slug}/edit', [ProductController::class, 'edit']);
Route::patch('products/{category}/{id}', [ProductController::class, 'update'])->name('products.update');

Route::get('order/{productId}', [OrderController::class, 'showOrderForm'])->name('order.form');


Route::get('order/{productId}', [OrderController::class, 'showOrderForm'])->name('order.form');
Route::get('/blog', function () {
    return view('blog');
});
