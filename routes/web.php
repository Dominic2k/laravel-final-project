<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'getIndex'])->name('homepage');

Route::get('/detail_product',[HomeController::class, 'showDetail'])->name('detail');

Route::get('/about_us', [HomeController::class, 'showAboutUs'])->name('aboutus');
