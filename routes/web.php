<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\LoginController;


Route::get('/', [RegisterController::class, 'create'])->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/home', [TodosController::class, 'index'])->name('home')->middleware('auth');
Route::post('/todos', [TodosController::class, 'store'])->name('todos.store');
Route::post('/delete/{todo}', [TodosController::class, 'delete'])->name('todo.delete');
Route::post('/todos/{todo}/edit', [TodosController::class, 'edit'])->name('todos.edit');
Route::post('/todos/{todo}/update', [TodosController::class, 'update'])->name('todos.update');
Route::post('/todos/{todo}/toggle', [TodosController::class, 'toggle'])->name('todos.toggle');

// Login Routes
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

// Logout Route
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');