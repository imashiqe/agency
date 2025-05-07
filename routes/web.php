<?php

use Illuminate\Support\Facades\Auth;
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
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
