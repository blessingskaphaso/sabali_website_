<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/dashboard', function () {
    //return view('dashboard'); // We will build this later
//});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
