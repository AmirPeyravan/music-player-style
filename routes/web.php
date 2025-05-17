<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('auth')->group(function () {

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

});

Route::prefix('dashboard')->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

});



