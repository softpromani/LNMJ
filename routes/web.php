<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/layout', [HomeController::class, 'contactus']);

Route::get('/about-university',[HomeController::class,'about_university']);