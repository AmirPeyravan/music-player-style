<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/login', function () {
    return view('auth.login');
});
