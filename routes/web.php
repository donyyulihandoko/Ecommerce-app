<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Admin
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {
    Route::resource('brands', BrandController::class);
    Route::resource('categories', CategoryController::class);
});

// User
Route::middleware(['auth', 'isUser'])->group(function () {
    // Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
});

Route::fallback(function () {
    return response()->redirectToRoute('home.index');
});
