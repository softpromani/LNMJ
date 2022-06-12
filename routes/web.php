<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/iqac-intro', [HomeController::class, 'iqacIntro']);

Route::get('/layout', [HomeController::class, 'contactus']);
