<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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
Route::get('/iqac-composition', [HomeController::class, 'iqacComposition'])->name('iqacComposition');
Route::get('/iqac-minutes-meeting', [HomeController::class, 'iqacMeeting'])->name('iqacMeeting');

Route::get('/admission-home', [HomeController::class, 'admissionHome'])->name('admission.home');


Route::get('/e-learning-resources', [HomeController::class, 'eLearningResource'])->name('eLearningResource');

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
Route::get('/rti-act', [HomeController::class, 'rtiAct'])->name('rtiAct');

Route::get('/department-of-botany', [HomeController::class, 'botanyDepartment'])->name('botanyDepartment');
Route::get('/department-of-chemistry', [HomeController::class, 'chemistryDepartment'])->name('chemistryDepartment');
Route::get('/department-of-mathematics', [HomeController::class, 'mathematicsDepartment'])->name('mathematicsDepartment');
Route::get('/department-of-physics', [HomeController::class, 'physicsDepartment'])->name('physicsDepartment');
Route::get('/department-of-zoology', [HomeController::class, 'zoologyDepartment'])->name('zoologyDepartment');


Route::get('/constituent-colleges', [HomeController::class, 'constituentColleges'])->name('constituentColleges');
Route::get('/affiliated-degree-colleges', [HomeController::class, 'affiliatedDegreeColleges'])->name('affiliatedDegreeColleges');
Route::get('/affiliated-Bed-colleges', [HomeController::class, 'affiliatedBedColleges'])->name('affiliatedBedColleges');
Route::get('/affiliated-technical-colleges', [HomeController::class, 'affiliatedTechnicalColleges'])->name('affiliatedTechnicalColleges');

Route::get('/department-business-administration', [HomeController::class, 'departmentBusinessDepartment'])->name('departmentBusinessDepartment');
Route::get('/department-biotechnology', [HomeController::class, 'departmentBioTechnology'])->name('departmentBioTechnology');
Route::get('/department-information-science', [HomeController::class, 'departmentInformationScience'])->name('departmentInformationScience');
Route::get('/department-gerontology', [HomeController::class, 'departmentGerontology'])->name('departmentGerontology');
Route::get('/advance-research', [HomeController::class, 'advanceResearch'])->name('advanceResearch');
Route::get('/women-studies', [HomeController::class, 'womenStudies'])->name('womenStudies');
Route::get('/tenders', [HomeController::class, 'tenders'])->name('tenders');
Route::get('/document-notice', [HomeController::class, 'documentNotice'])->name('documentNotice');
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

// Academics
Route::get('/acd-phd',[HomeController::class,'acd_phd'])->name('acd.phd');
Route::get('/acd-faculties',[HomeController::class,'acd_faculties'])->name('acd.faculties');

Route::get('/science-department',[HomeController::class,'scienceDepartment'])->name('scienceDepartment');
Route::get('/social_science_department',[HomeController::class,'socialScienceDepartment'])->name('social_scienceDepartment');
Route::get('/humanities',[HomeController::class,'humanities'])->name('humanities');
Route::get('/department-of-Maithili', [HomeController::class, 'MaithiliDepartment'])->name('MaithiliDepartment');
Route::get('/department-of-sanskrit', [HomeController::class, 'sanskritDepartment'])->name('sanskritDepartment');
Route::get('/department-of-philosophy', [HomeController::class, 'philosophyDepartment'])->name('philosophyDepartment');
Route::get('/department-of-urdu', [HomeController::class, 'urduDepartment'])->name('urduDepartment');
Route::get('/department-of-hindi', [HomeController::class, 'hindiDepartment'])->name('hindiDepartment');
Route::get('/department-of-english', [HomeController::class, 'englishDepartment'])->name('englishDepartment');
Route::get('/pg-department-of-commerce-management', [HomeController::class, 'commerceManagementDepartment'])->name('commerceManagementDepartment');
Route::get('/pg-department-of-ancient-indian-history', [HomeController::class, 'indianHistoryDepartment'])->name('indianHistoryDepartment');

Route::get('/department-of-music-dramatics', [HomeController::class, 'musicDepartment'])->name('musicDepartment');
Route::get('/department-of-economics', [HomeController::class, 'economicsDepartment'])->name('economicsDepartment');
Route::get('/department-of-geography', [HomeController::class, 'geographyDepartment'])->name('geographyDepartment');
Route::get('/department-of-history', [HomeController::class, 'historyDepartment'])->name('historyDepartment');
Route::get('/department-of-home-science', [HomeController::class, 'homescienceDepartment'])->name('homescienceDepartment');
Route::get('/department-of-psychology', [HomeController::class, 'psychologyDepartment'])->name('psychologyDepartment');
Route::get('/department-of-political-science', [HomeController::class, 'politicalcienceDepartment'])->name('politicalcienceDepartment');
Route::get('/department-of-sociology', [HomeController::class, 'sociologyDepartment'])->name('sociologyDepartment');

Route::get('/commerce',[HomeController::class,'commerce'])->name('commerce');
Route::get('/law',[HomeController::class,'law'])->name('law');
Route::get('/dentistry',[HomeController::class,'dentistry'])->name('dentistry');
Route::get('/education',[HomeController::class,'education'])->name('education');
Route::get('/fine-arts',[HomeController::class,'fineArts'])->name('fineArts');

Route::get('/acd-college',[HomeController::class,'acd_college'])->name('acd.college');
Route::get('/acd-college',[HomeController::class,'acd_college'])->name('acd.college');



Route::get('/admin', [AdminController::class, 'login'])->name('admin');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::post('/adminlogin', [AdminController::class, 'adminLogin'])->name('adminLogin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('AdminAuth');

    Route::get('/notice',[AdminController::class,'notice'])->name('notice');
    Route::post('/savenotice',[AdminController::class,'saveNotice'])->name('savenotice');
    Route::get('/delnotice/{del}',[AdminController::class,'delNotice']);

    Route::get('/aqar', [AdminController::class, 'aqar'])->name('aqar');
    Route::post('/saveaqar',[AdminController::class,'saveAqar'])->name('saveaqar');
    Route::get('/delaqar/{del}',[AdminController::class,'delAqar']);

});
