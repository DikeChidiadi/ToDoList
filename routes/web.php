<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/',  function () {
    return view('loginregister');
});

Route::get('/home', [LoginController::class, 'home'])->name('home');
Route::post('/login', [LoginController::class, 'login']);



Route::match(['get', 'post'], '/home', [RegisterController::class, 'home']);