<?php

use App\Http\Controllers\Admin\AdminCommentsController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminIdeasController;
use App\Http\Controllers\Admin\AdminUsersController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'admin'])->prefix('admin')->as('admin.')->group( function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', AdminUsersController::class)->only('index');
    Route::resource('ideas', AdminIdeasController::class)->only('index');
    Route::resource('comments', AdminCommentsController::class)->only('index', 'destroy');

});
