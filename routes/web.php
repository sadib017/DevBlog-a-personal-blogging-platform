<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/membership', [HomeController::class, 'membership'])->name('membership');
Route::post('/contact', [HomeController::class, 'StoreContactInfo'])->name('contact.store');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'StoreUserInfo'])->name('register.store');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.submit');

# Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/create-post', [DashboardController::class, 'createpost'])->middleware('auth')->name('create-post');
Route::post('/create-post', [DashboardController::class, 'StorePostInfo'])->middleware('auth')->name('post.store');

# Profile
Route::get('/profile', [DashboardController::class, 'profile_show'])->middleware('auth')->name('profile.show');
Route::put('/profile', [DashboardController::class, 'profile_update'])->middleware('auth')->name('profile.update');

