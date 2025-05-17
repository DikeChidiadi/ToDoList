<?php

use Illuminate\Support\Facades\Route;

Route::get('/',  function () {
    return view('loginregister');
});

Route::get('/home', function () {
    return view('home');
});

