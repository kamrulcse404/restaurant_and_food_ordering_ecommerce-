<?php

use App\Http\Controllers\Admin\AdminDashboardContraoller;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('dashboard', [AdminDashboardContraoller::class, 'index'])->name('dashboard');

    // profile routes 
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
});
