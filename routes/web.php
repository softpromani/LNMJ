<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/iqac-intro', [HomeController::class, 'iqacIntro'])->name('iqac-intro');
Route::get('/iqac-committee', [HomeController::class, 'iqacCommittee'])->name('iqacCommittee');
Route::get('/iqac-strategic-plan', [HomeController::class, 'iqacStrategicPlan'])->name('iqacStrategicPlan');
Route::get('/iqac-vision', [HomeController::class, 'iqacVision'])->name('iqacVision');
Route::get('/iqac-feedback', [HomeController::class, 'iqacFeedback'])->name('iqacFeedback');
Route::get('/iqac-events', [HomeController::class, 'iqacEvents'])->name('iqacEvents');
Route::get('/iqac-reports', [HomeController::class, 'iqacReports'])->name('iqacReports');
Route::get('/iqac-contacts', [HomeController::class, 'iqacContacts'])->name('iqacContacts');
Route::get('/ssr-report', [HomeController::class, 'iqacSsr'])->name('iqacSsr');
Route::get('/all-officer', [HomeController::class, 'allOfficer'])->name('allOfficer');

Route::get('/admission', [HomeController::class, 'admission'])->name('admission');


Route::get('/aqar', [HomeController::class, 'aqar'])->name('aqar');
Route::get('/criteria', [HomeController::class, 'criteria'])->name('criteria');

Route::get('/contact-us', [HomeController::class, 'contactus'])->name('contactus');

Route::get('/kulgeet', [HomeController::class, 'kulgeet'])->name('kulgeet');

Route::get('/archive', [HomeController::class, 'archive'])->name('archive');
Route::get('/course', [HomeController::class, 'course'])->name('course');
Route::get('/institutional-distinctiveness', [HomeController::class, 'instituteDistinct'])->name('instituteDistinct');


Route::get('/exam-home', [HomeController::class, 'examHome'])->name('examHome');
Route::get('/exam-result', [HomeController::class, 'examResult'])->name('examResult');
Route::get('/cells', [HomeController::class, 'cells'])->name('cells');
Route::get('/regulation', [HomeController::class, 'regulation'])->name('regulation');
Route::get('/fee-structure', [HomeController::class, 'feeStructure'])->name('feeStructure');
Route::get('/pg-syllabus', [HomeController::class, 'pgSyllabus'])->name('pgSyllabus');
Route::get('/central-library', [HomeController::class, 'centralLibrary'])->name('centralLibrary');
Route::get('/hostel', [HomeController::class, 'hostel'])->name('hostel');
Route::get('/suggestive-measure', [HomeController::class, 'suggestiveMeasure'])->name('suggestiveMeasure');

Route::get('/policies', [HomeController::class, 'policies'])->name('policies');

Route::get('/photo-gallery', [HomeController::class, 'photoGallery'])->name('photogallery');

Route::get('/about-university',[HomeController::class,'about_university'])->name('about.university');
Route::get('/about-focus',[HomeController::class,'about_focus'])->name('about.focus');
Route::get('/about-campus',[HomeController::class,'about_campus'])->name('about.campus');
Route::get('/about-bestpractice',[HomeController::class,'about_bestpractice'])->name('about.bestpractice');
Route::get('/about-visionmission',[HomeController::class,'about_vision'])->name('about.visionmission');

// Administration
Route::get('/adm-vc',[HomeController::class,'adm_vc'])->name('adm.vc');
Route::get('/adm-pvc',[HomeController::class,'adm_pvc'])->name('adm.pvc');
Route::get('/adm-registrar',[HomeController::class,'adm_registrar'])->name('adm.registrar');
Route::get('/adm-organizational-structure',[HomeController::class,'adm_ogzstr'])->name('adm.ogzstr');
Route::get('/adm-fa',[HomeController::class,'adm_fa'])->name('adm.fa');
Route::get('/adm-dsw',[HomeController::class,'adm_dsw'])->name('adm.dsw');
Route::get('/adm-pructor',[HomeController::class,'adm_pructor'])->name('adm.pructor');
Route::get('/adm-ccdc',[HomeController::class,'adm_ccdc'])->name('adm.ccdc');
Route::get('/adm-registrar',[HomeController::class,'adm_registrar'])->name('adm.registrar');

// Route::get('/vice-chancellor',[HomeController::class,'vc'])->name('vice_chancellor');


// Academics

Route::get('/acd-phd',[HomeController::class,'acd_phd'])->name('acd.phd');
Route::get('/acd-faculties',[HomeController::class,'acd_faculties'])->name('acd.faculties');

Route::get('/science-department',[HomeController::class,'scienceDepartment'])->name('scienceDepartment');

Route::get('/acd-college',[HomeController::class,'acd_college'])->name('acd.college');
