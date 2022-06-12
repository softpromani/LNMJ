<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/iqac-intro', [HomeController::class, 'iqacIntro'])->name('iqac-intro');

Route::get('/layout', [HomeController::class, 'contactus']);

Route::get('/about-university',[HomeController::class,'about_university']);