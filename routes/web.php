<?php

use App\Http\Controllers\login\AdminLoginController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AdminLoginController::class, 'index']);
Route::post('/do_login', [AdminLoginController::class, 'do_login']);


