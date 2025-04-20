<?php

use Illuminate\Support\Facades\Route;




// Frontend routes
Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('frontend.home');
    })->name('frontend.home');

    Route::get('/about', function () {
        return view('frontend.about');
    })->name('frontend.about');
});


// Backend (Admin) routes
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('admin.users');
});