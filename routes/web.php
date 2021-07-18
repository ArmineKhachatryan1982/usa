<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OurPartnersController;
use App\Http\Controllers\TrainingProgramController;
use App\Http\Controllers\NewsAndMediaController;
use App\Http\Controllers\CohortsController;
use App\Http\Controllers\SteeringcommitteeController;
use App\Http\Controllers\AluminiassciationController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\AdminhomepageController;
use App\Http\Controllers\HomepageshowController;
use App\Http\Controllers\AdminhomepageupdateController;
use App\Http\Controllers\SteeringCommitteeUpdateController;
use App\Http\Controllers\AlumniAssociationUpdateController;
use App\Http\Controllers\AdminCohortController;
use App\Http\Controllers\AdminCohortsimgandtextController;
use App\Http\Controllers\SteeringCommitteeImageUploadController;
use App\Http\Controllers\AAimageController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminaboutController;
use App\Http\Controllers\AffiliatesController;
use App\Http\Controllers\PartnoreController;
use App\Http\Controllers\AdminaboutindexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// url run defult lang
Route::get('/', function () {
          return redirect('/'.app()->getLocale());
      });

Route::prefix('{locale?}')->name('locale.')->group(function (){

    Route::get('/',[HomepageController::class,'index']);
    Route::get('/about',[AboutController::class,'index'])->name('about');
    Route::get('/our_partners',[OurPartnersController::class,'index'])->name('our_partners');
    Route::get('/training_program',[TrainingProgramController::class,'index'])->name('training_program');
    Route::get('/news&media',[NewsAndMediaController::class,'index'])->name('news&media');
    Route::get('/cohorts',[CohortsController::class,'index'])->name('')->name('cohorts');
    Route::get('/steeringcommittee',[SteeringcommitteeController::class,'index'])->name('steeringcommittee');
    Route::get('/aluminiassciation',[AluminiassciationController::class,'index'])->name('aluminiassciation');
    Route::get('/contactus',[ContactusController::class,'index'])->name('contactus');
});


// role and prmishen  middleware
Route::group(['middleware' => ['auth']], function() {



});
Route::get('/admin/adminhomepageshowhomepage',[AdminhomepageController::class,'index']);
Route::get('/admin',[HomepageshowController::class,'index'])->name('adminhomepageshow');

// Creating new controller for  working admin panel HomepageshowController,AdminhomepageupdateController table  insert data,show and update data routs start
Route::get('/admin/adminhomepageshow',[HomepageshowController::class,'index'])->name('adminhomepageshow');
Route::post('/admin/adminhomepageshow',[HomepageshowController::class,'store'])->name('homepageshow.store');
Route::get('/admin/tableupdatedelete',[AdminhomepageupdateController::class,'index'])->name('tableupdatedelete');
Route::get('/admin/edithomepage/{homepageid}',[AdminhomepageupdateController::class,'show'])->name('edithomepagecreate');
Route::post('/admin/edithomepage',[AdminhomepageupdateController::class,'update'])->name('updatehomepage');
//Creating new controller for  working admin panel HomepageshowController,AdminhomepageupdateController table  insert data,show and update data routs end



// Creating new controller for  working admin panel AdminCohortController table show and update routs start
    Route::get('/admin/admin_cohorts',[AdminCohortController::class,'index'])->name('cohort_first_text_show');
    Route::get('admin/admin_cohorts_first_text_edit/{cohorts_id}',[AdminCohortController::class,'show'])->name('admin_cohorts_first_text_edit');
    Route::post('admin/admin_cohorts_first_text_update',[AdminCohortController::class,'update'])->name('admin_cohorts_first_text_update');
   // Cohorts image and text inserted route start
    Route::get('admin/admin_cohorts_img_and_text',[AdminCohortsimgandtextController::class,'index'])->name('admin_cohorts_img_and_text');
    Route::get('admin/admin_cohort_infos_img_text_form', [AdminCohortsimgandtextController::class,'create'])->name('admin_cohort_infos_img_text_form');
    Route::post('admin/admin_cohort_infos_img_text_inserted',[AdminCohortsimgandtextController::class,'store'])->name('admin_cohort_infos_img_text_inserted');
    // Cohorts image and text inserted route end
// Creating new controller for  working admin panel  AdminCohortController table show and update routs end




// Creating new controller for  working admin panel Steering_Committee table show and update routs start
       Route::get('/admin/admin_Steering_Committee',[SteeringCommitteeUpdateController::class,'index'])->name('admin_Steering_Committee');
       Route::get('admin/admin_steering_committee_edit/{steering_Id}',[SteeringCommitteeUpdateController::class,'show'])->name('admin_steering_committee_edit');
       Route::post('/admin/admin_steering_committee_update',[SteeringCommitteeUpdateController::class,'update'])->name('admin_steering_committee_update');
   //Routes for uploading  img for steering committee blade start
      Route::get ('/admin/admin_steering_committe_img_form',[SteeringCommitteeImageUploadController::class,'index'])->name('admin_steering_committe_img_form');
      Route::post('/admin/admin_steering_committe_img_upload',[SteeringCommitteeImageUploadController::class,'store'])->name('admin_steering_committe_img_upload');
   // Routes for uploading  img for steering committee blade end
//Steering_Committee table show and update routs end

// Creating new controller for  working admin panel Alumni_Association table show and update routs start
Route::get('/admin/admin_Alumni_Association',[AlumniAssociationUpdateController::class,'index'])->name('admin_Alumni_Association');
Route::get('/admin/admin_Alumni_Association_edit/{alumni_Id}',[AlumniAssociationUpdateController::class,'show'])->name('admin_Alumni_Association_edit');
Route::post('/admin/admin_Alumni_Association_updated',[AlumniAssociationUpdateController::class,'update'])->name('admin_Alumni_Association_updated');
//Alumni_Association table show and update routs end

Route::get('/admin/admin_Alumni_Association_image',[AAimageController::class,'index'])->name('admin_Alumni_Association_image');
Route::post('/admin/admin_Alumni_Association_image_insert',[AAimageController::class,'insert'])->name('admin_Alumni_Association_image_insert');
Route::post('/admin/admin_Alumni_Association_image_delete',[AAimageController::class,'delete'])->name('admin_Alumni_Association_image_delete');


// news admin route
Route::get('/admin/admin_news_and_events',[AdminNewsController::class,'index'])->name('admin_news_and_events');
Route::get('/admin/admin_news_and_events_add',[AdminNewsController::class,'insert_page'])->name('admin_news_and_events_add');
Route::post('/admin/admin_news_and_events_add',[AdminNewsController::class,'insert'])->name('admin_news_and_events_add');
Route::get('/admin/admin_news_and_events_delete/{id}',[AdminNewsController::class,'delete'])->name('admin_news_and_events_delete');
Route::get('/admin/admin_news_edit/{id}',[AdminNewsController::class,'edit'])->name('admin_news_edit');

Route::post('/admin/admin_news_edit',[AdminNewsController::class,'update'])->name('admin_news_update');


// about admin route

Route::get('/admin/admin_about_edit',[AdminaboutController::class,'index'])->name('admin_about_edit');
Route::post('/admin/admin_about_edit',[AdminaboutController::class,'update'])->name('admin_about_update');

// about affiliates route

Route::get('/admin/admin_affiliates_add',[AffiliatesController::class,'index'])->name('admin_affiliates_add');
Route::post('/admin/admin_affiliates_add',[AffiliatesController::class,'add'])->name('admin_affiliates_add');
Route::get('/admin/admin_affiliates_edit/{id}',[AffiliatesController::class,'edit'])->name('admin_affiliates_edit');
Route::post('/admin/admin_affiliates_update/{id}',[AffiliatesController::class,'update'])->name('admin_affiliates_update');
Route::get('/admin/admin_affiliates_delete/{id}',[AffiliatesController::class,'delete'])->name('admin_affiliates_delete');

// about partnore route

Route::get('/admin/admin_partnore_add',[PartnoreController::class,'index'])->name('admin_partnore_add');
Route::post('/admin/admin_partnore_add',[PartnoreController::class,'add'])->name('admin_partnore_add');
Route::get('/admin/admin_partnore_edit/{id}',[PartnoreController::class,'edit'])->name('admin_partnore_edit');
Route::post('/admin/admin_partnore_update/{id}',[PartnoreController::class,'update'])->name('admin_partnore_update');
Route::get('/admin/admin_partnore_delete/{id}',[PartnoreController::class,'delete'])->name('admin_partnore_delete');

// about index admin route

Route::get('/admin/admin_aboutindex_edit',[AdminaboutindexController::class,'index'])->name('admin_aboutindex_edit');
Route::post('/admin/admin_aboutindex_edit',[AdminaboutindexController::class,'update'])->name('admin_aboutindex_edit');