<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, 'index']);
Auth::routes();

Route::get('/admin', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'admin.'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});