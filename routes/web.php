<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'getIndex'])->name('homepage');
Route::get('/feedback', [FeedbackController::class,'getIndex'])->name('feedback');
Route::post('/feedback', [FeedbackController::class,'postFeedback'])->name('postFeedback');
