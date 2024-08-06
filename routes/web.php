<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'view']);
Route::get('/user-profile', [UserProfileController::class, 'view']);
