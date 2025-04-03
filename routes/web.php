<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', [HomeController::class,'getIndex'])->name('homepage');
Route::get('/feedback', [FeedbackController::class,'getIndex'])->name('feedback');
Route::post('/feedback', [FeedbackController::class,'postFeedback'])->name('postFeedback');

Route::get('/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'register']);

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout'])->name('logout');
