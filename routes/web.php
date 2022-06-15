<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/iqac-intro', [HomeController::class, 'iqacIntro'])->name('iqac-intro');
Route::get('/iqac-committee', [HomeController::class, 'iqacCommittee'])->name('iqacCommittee');
Route::get('/iqac-strategic-plan', [HomeController::class, 'iqacStrategicPlan'])->name('iqacStrategicPlan');
Route::get('/iqac-vision', [HomeController::class, 'iqacVision'])->name('iqacVision');
Route::get('/aqar', [HomeController::class, 'aqar'])->name('aqar');
Route::get('/criteria', [HomeController::class, 'criteria'])->name('criteria');

Route::get('/contact-us', [HomeController::class, 'contactus']);

Route::get('/kulgeet', [HomeController::class, 'kulgeet']);

Route::get('/all-officer', [HomeController::class, 'allOfficer']);
Route::get('/photo-gallery', [HomeController::class, 'photoGallery'])->name('photogallery');

Route::get('/about-university',[HomeController::class,'about_university'])->name('about.university');
Route::get('/about-focus',[HomeController::class,'about_focus'])->name('about.focus');
Route::get('/about-campus',[HomeController::class,'about_campus'])->name('about.campus');
Route::get('/about-bestpractice',[HomeController::class,'about_bestpractice'])->name('about.bestpractice');
Route::get('/about-visionmission',[HomeController::class,'about_vision'])->name('about.visionmission');
Route::get('/vice-chancellor',[HomeController::class,'vc'])->name('vice_chancellor');

