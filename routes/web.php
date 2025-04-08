<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

//Home
Route::get('/', [HomeController::class,'getIndex'])->name('homepage');
//Feedback
Route::get('/feedback', [FeedbackController::class,'getIndex'])->name('feedback');
Route::post('/feedback', [FeedbackController::class,'postFeedback'])->name('postFeedback');
//Register
Route::get('/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'register']);
//Login
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);
//Logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('forgot-password', [UserController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('forgot-password', [UserController::class, 'sendResetPasswordLink'])->name('password.email');
Route::get('reset-password/{token}', [UserController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('reset-password', [UserController::class, 'resetPassword'])->name('password.update');

Route::get('/admin', [AdminController::class, 'showDashboard'])->name('dashboard');

Route::get('/details/{id}', [ProductController::class, 'getDetail']);

Route::get('/about_us', [HomeController::class, 'showAboutUs'])->name('aboutus');
