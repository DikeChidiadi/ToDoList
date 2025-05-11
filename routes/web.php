<?php

use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginRegisterController::class, 'index']);


Route::get('/home', function () {
    return view('home');
});

Route::view('/loginregister', 'loginregister');

Route::get('/home', [LoginRegisterController::class, 'home'])->name('home');

Route::post('/home', [LoginRegisterController::class, 'login'])->name('login');
Route::post('/home', [LoginRegisterController::class, 'register'])->name('register');