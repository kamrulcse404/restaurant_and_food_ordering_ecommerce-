<?php

use App\Http\Controllers\Admin\AdminDashboardContraoller;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('dashboard', [AdminDashboardContraoller::class, 'index'])->name('dashboard');
});
