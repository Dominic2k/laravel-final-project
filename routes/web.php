<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
