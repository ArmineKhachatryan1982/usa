<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\News1Controller;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\CohortsController;
use App\Http\Controllers\Courses4Controller;
use App\Http\Controllers\AluminiassciationController;
use App\Http\Controllers\SteeringcommitteeController;
use App\Http\Controllers\TrainingController;



use App\Http\Controllers\AdminhomepageController;
use App\Http\Controllers\HomepageshowController;
use App\Http\Controllers\AdminhomepageupdateController;


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
Route::get('/',[HomepageController::class,'index']);
Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::get('/aboutus',[AboutusController::class,'index'])->name('about');
Route::get('/news1',[News1Controller::class,'index'])->name('news');
Route::get('/contactus',[ContactusController::class,'index'])->name('contactus');
Route::get('/partners',[PartnersController::class,'index'])->name('partners');
Route::get('/cohorts',[CohortsController::class,'index']);
Route::get('/courses4',[Courses4Controller::class,'index'])->name('courses');
Route::get('/alumini',[AluminiassciationController::class,'index'])->name('alumni');
Route::get('/steeringcommittee',[SteeringcommitteeController::class,'index'])->name('steering');
Route::get('/cohorts',[CohortsController::class,'index'])->name('')->name('cohorts');
Route::get('/trainingprograam',[TrainingController::class,'index'])->name('training');



Route::get('/admin/adminhomepage',[AdminhomepageController::class,'index']);

Route::get('/admin/adminhomepageshow',[HomepageshowController::class,'index'])->name('adminhomepageshow');
Route::post('/admin/adminhomepageshow',[HomepageshowController::class,'store'])->name('homepageshow.store');
Route::get('/admin/tableupdatedelete',[AdminhomepageupdateController::class,'index'])->name('tableupdatedelete');
Route::get('/admin/edithomepage/{homepageid}',[AdminhomepageupdateController::class,'show'])->name('edithomepagecreate');



