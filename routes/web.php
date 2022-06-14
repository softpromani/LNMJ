<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/iqac-intro', [HomeController::class, 'iqacIntro'])->name('iqac-intro');
Route::get('/iqac-committee', [HomeController::class, 'iqacCommittee'])->name('iqacCommittee');
Route::get('/iqac-strategic-plan', [HomeController::class, 'iqacStrategicPlan'])->name('iqacStrategicPlan');
Route::get('/iqac-vision', [HomeController::class, 'iqacVision'])->name('iqacVision');

Route::get('/contact-us', [HomeController::class, 'contactus']);

Route::get('/kulgeet', [HomeController::class, 'kulgeet']);

Route::get('/all-officer', [HomeController::class, 'allOfficer']);

Route::get('/about-university',[HomeController::class,'about_university']);
Route::get('/vice-chancellor',[HomeController::class,'vc'])->name('vice_chancellor');
