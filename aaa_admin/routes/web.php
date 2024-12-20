<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AdminController::class, 'login']);
Route::get('/changepassword', [AdminController::class, 'changePassword'])->name('change-password');
Route::get('/newadmin', [AdminController::class, 'showNewAdmin']);
Route::get('/editprofile', [AdminController::class, 'editProfile'])->name('edit-profile');
Route::get('/about', [PageController::class, 'about']);
Route::get('/chart', [PageController::class, 'chart']);
