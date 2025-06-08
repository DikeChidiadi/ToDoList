<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodosController;


Route::get('/',  function () {
    return view('register');
});

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/home', [TodosController::class, 'index'])->name('home');
Route::post('/todos', [TodosController::class, 'store'])->name('todos.store');
Route::post('/delete/{id}', [TodosController::class, 'delete'])->name('todo.delete');