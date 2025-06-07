<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


Route::get('/',  function () {
    return view('register');
});

Route::get('/home', [RegisterController::class, 'index'])->name('home');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/delete/{id}', [RegisterController::class, 'delete'])->name('todo.delete');