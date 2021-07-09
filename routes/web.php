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
Route::get('/admin/adminhomepage',[AdminhomepageController::class,'index']);

Route::get('/admin/adminhomepageshow',[HomepageshowController::class,'index'])->name('adminhomepageshow');
Route::post('/admin/adminhomepageshow',[HomepageshowController::class,'store'])->name('homepageshow.store');
Route::get('/admin/tableupdatedelete',[AdminhomepageupdateController::class,'index'])->name('tableupdatedelete');
Route::get('/admin/edithomepage/{homepageid}',[AdminhomepageupdateController::class,'show'])->name('edithomepagecreate');






