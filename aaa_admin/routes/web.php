<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\http\Controllers\AdminController;
use App\http\Controllers\LocationController;
use App\http\Controllers\UnitController;
use App\http\Controllers\CustomerController;
use App\http\Controllers\PaymentController;
use App\http\Controllers\ReviewController;

//home routes
Route::get('/', [HomeController::class, 'index']);

//admin routes
Route::get('/admin-list', [AdminController::class, 'adminList'])->name('admin-list');
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/change-password', [AdminController::class, 'changePassword'])->name('change-password');
Route::get('/new-admin', [AdminController::class, 'newAdmin'])->name('new-admin');
Route::get('/edit-profile', [AdminController::class, 'editProfile'])->name('edit-profile');

//location routes
Route::get('/location-detail', [LocationController::class, 'locationDetail'])->name('location-detail');

//unit routes
Route::get('/unit-list', [UnitController::class, 'unitList'])->name('unit-list');
Route::get('/unit-detail', [UnitController::class, 'unitDetail'])->name('unit-detail');

//customer routes
Route::get('/customer-list', [CustomerController::class, 'customerList'])->name('customer-list');
Route::get('/customer-detail', [CustomerController::class, 'customerDetail'])->name('customer-detail');

//payment routes
Route::get('/payment-list', [PaymentController::class, 'paymentList'])->name('payment-list');

//review routes
Route::get('/review-list', [ReviewController::class, 'reviewList'])->name('review-list');

Route::get('/about', [PageController::class, 'about']);
Route::get('/chart', [PageController::class, 'chart']);
