<?php

use App\Http\Controllers\admin\AdminDashboardController;
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
});


// ************ logout not executed
Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');


