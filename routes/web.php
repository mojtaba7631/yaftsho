<?php

use App\Http\Controllers\login\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/',function (){
    return view('welcome');
})->name('home');

Route::get('/login', [AdminLoginController::class, 'index'])->name('login.show');
Route::post('/do_login', [AdminLoginController::class, 'do_login'])->name('login.do');


