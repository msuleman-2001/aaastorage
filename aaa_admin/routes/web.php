<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\http\Controllers\AdminController;
use App\http\Controllers\LocationController;

//home routes
Route::get('/', [HomeController::class, 'index']);

//admin routes
Route::get('/admin-list', [AdminController::class, 'adminList'])->name('admin-list');
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/change-password', [AdminController::class, 'changePassword'])->name('change-password');
Route::get('/new-admin', [AdminController::class, 'showNewAdmin']);
Route::get('/edit-profile', [AdminController::class, 'editProfile'])->name('edit-profile');

//location routes
Route::get('/location-detail', [LocationController::class, 'locationDetail'])->name('location-detail');

Route::get('/about', [PageController::class, 'about']);
Route::get('/chart', [PageController::class, 'chart']);
