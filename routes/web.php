<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\login\AdminLoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AdminLoginController::class, 'index'])->name('login.show');
Route::post('/do_login', [AdminLoginController::class, 'do_login'])->name('login.do');


//admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    //products

    Route::get('/products',[AdminProductController::class, 'index'])->name('admin.products');
    Route::get('/product_create',[AdminProductController::class, 'create'])->name('admin.product_create');
    Route::post('/product_store',[AdminProductController::class, 'store'])->name('admin.product_store');
    Route::get('/product_edit',[AdminProductController::class, 'edit'])->name('admin.product_edit');
    Route::post('/product_update',[AdminProductController::class, 'update'])->name('admin.product_update');
    Route::get('/product_destroy',[AdminProductController::class, 'destroy'])->name('admin.product_destroy');
});


// ************ logout not executed
Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');


