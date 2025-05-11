<?php

use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('loginregister');
});

Route::get('/home', function () {
    return view('home');
});

Route::view('/loginregister', 'loginregister');

Route::post('/home', [LoginRegisterController::class, 'home']);