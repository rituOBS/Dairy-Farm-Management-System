<?php

use App\Http\Controllers\BrownController;
use App\Http\Controllers\FeedingController;
use App\Http\Controllers\MilkWeightController;
use App\Http\Controllers\BrownCowGenderController;

use App\Http\Controllers\BessieController;
use App\Http\Controllers\BessieFeedingController;
use App\Http\Controllers\BessieCowGenderController;

use App\Http\Controllers\IndianController;
use App\Http\Controllers\IndianFeedingController;
use App\Http\Controllers\IndianCowGenderController;

use App\Http\Controllers\HolsteinController;
use App\Http\Controllers\HolsteinFeedingController;
use App\Http\Controllers\HolsteinMilkWeightController;
use App\Http\Controllers\HolsteinCowGenderController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ProductController as WebsiteProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\CowController;
use App\Http\Controllers\CowShadeController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\MilkController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VaccineMonitorController;
use App\Http\Controllers\VaccineScheduleController;
use App\Http\Controllers\FeedScheduleController;
use App\Http\Controllers\CategoriesController;

use App\Http\Controllers\ReportController;

use App\Http\Controllers\UserController;
use App\Models\CowShade;

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/search',[HomeController::class,'search'])->name('search');


//show login form
Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');
//submit login form
Route::post('/admin/do-login',[UserController::class,'doLogin'])->name('admin.do-login');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');
Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');


/*start categories controller */
Route::get('/categoy-index',[CategoriesController::class,'index'])->name('category.index');
Route::get('/categories/delete/{id}',[CategoriesController::class,'delete'])->name('categories.delete');
Route::get('/categories/edit/{id}',[CategoriesController::class,'edit'])->name('categories.edit');
Route::put('/categories/update/{id}',[CategoriesController::class,'update'])->name('categories.update');
Route::get('/categoy-create',[CategoriesController::class,'create'])->name('category.create');
Route::post('/categoy-store',[CategoriesController::class,'store'])->name('category.store');
/*end categories controller */


// ** Route for Brown cow Details **
Route::get('/brown-cow',[BrownController::class,'index'])->name('brownCow.index');
Route::get('/brown/delete/{id}',[BrownController::class,'delete'])->name('brown.delete');
Route::get('/brown/edit/{id}',[BrownController::class,'edit'])->name('brown.edit');
Route::put('/brown/update/{id}',[BrownController::class,'update'])->name('brown.update');
Route::get('/brown-cow-create',[BrownController::class,'create'])->name('brownCow.create');
Route::post('/brown-cow-store',[BrownController::class,'store'])->name('brownCow.store');


Route::get('/feeding-item',[FeedingController::class,'index'])->name('feeding.index');
Route::get('/feeding/delete/{id}',[FeedingController::class,'delete'])->name('feeding.delete');
Route::get('/feeding/edit/{id}',[FeedingController::class,'edit'])->name('feeding.edit');
Route::put('/feeding/update/{id}',[FeedingController::class,'update'])->name('feeding.update');
Route::get('/feeding-item-create',[FeedingController::class,'create'])->name('feeding.create');
Route::post('/feeding-item-store',[FeedingController::class,'store'])->name('feeding.store');


Route::get('/milk-weight',[MilkWeightController::class,'index'])->name('milkWeight.index');
Route::get('/milk-weight/delete/{id}',[MilkWeightController::class,'delete'])->name('milkweight.delete');
Route::get('/milk-weight/edit/{id}',[MilkWeightController::class,'edit'])->name('milkweight.edit');
Route::put('/milk-weight/update/{id}',[MilkWeightController::class,'update'])->name('milkweight.update');
Route::get('/milk-weight-create',[MilkWeightController::class,'create'])->name('milkWeight.create');
Route::post('/milk-weight-store',[MilkWeightController::class,'store'])->name('milkWeight.store');


// ** End Routes **


// ** Route for Bessie cow Details **
Route::get('/bessie-cow',[BessieController::class,'index'])->name('bessieCow.index');
Route::get('/bessie/delete/{id}',[BessieController::class,'delete'])->name('bessie.delete');
Route::get('/bessie/edit/{id}',[BessieController::class,'edit'])->name('bessie.edit');
Route::put('/bessie/update/{id}',[BessieController::class,'update'])->name('bessie.update');
Route::get('/bessie-cow-create',[BessieController::class,'create'])->name('bessieCow.create');
Route::post('/bessie-cow-store',[BessieController::class,'store'])->name('bessieCow.store');


Route::get('/bessie-feeding-item',[BessieFeedingController::class,'index'])->name('bessieFeeding.index');
Route::get('/bessie-feeding/delete/{id}',[BessieFeedingController::class,'delete'])->name('bessieFeeding.delete');
Route::get('/bessie-feeding/edit/{id}',[BessieFeedingController::class,'edit'])->name('bessieFeeding.edit');
Route::put('/bessie-feeding/update/{id}',[BessieFeedingController::class,'update'])->name('bessieFeeding.update');
Route::get('/bessie-feeding-item-create',[BessieFeedingController::class,'create'])->name('bessieFeeding.create');
Route::post('/bessie-feeding-item-store',[BessieFeedingController::class,'store'])->name('bessieFeeding.store');


// ** End Routes **


// ** Route for Holstein Details **
Route::get('/holstein-cow',[HolsteinController::class,'index'])->name('holsteinCow.index');
Route::get('/holstein/delete/{id}',[HolsteinController::class,'delete'])->name('holstein.delete');
Route::get('/holstein/edit/{id}',[HolsteinController::class,'edit'])->name('holstein.edit');
Route::put('/holstein/update/{id}',[HolsteinController::class,'update'])->name('holstein.update');
Route::get('/holstein-cow-create',[HolsteinController::class,'create'])->name('holsteinCow.create');
Route::post('/holstein-cow-store',[HolsteinController::class,'store'])->name('holsteinCow.store');


Route::get('/holstein-feeding-item',[HolsteinFeedingController::class,'index'])->name('holsteinFeeding.index');
Route::get('/holstein-feeding/delete/{id}',[HolsteinFeedingController::class,'delete'])->name('holsteinFeeding.delete');
Route::get('/holstein-feeding/edit/{id}',[HolsteinFeedingController::class,'edit'])->name('holsteinFeeding.edit');
Route::put('/holstein-feeding/update/{id}',[HolsteinFeedingController::class,'update'])->name('holsteinFeeding.update');
// Route::get('/holstein-feeding/edit/{id}',[HolsteinFeedingController::class,'edit'])->name('holsteinFeeding.edit');
Route::get('/holstein-feeding-item-create',[HolsteinFeedingController::class,'create'])->name('holsteinFeeding.create');
Route::post('/holstein-feeding-item-store',[HolsteinFeedingController::class,'store'])->name('holsteinFeeding.store');

Route::get('/holsteinmilk-weight',[HolsteinMilkWeightController::class,'index'])->name('holsteinmilkWeight.index');
Route::get('/holsteinMilk-weight/delete/{id}',[HolsteinMilkWeightController::class,'delete'])->name('holsteinMilkWeight.delete');
Route::get('/holsteinMilk-weight/edit/{id}',[HolsteinMilkWeightController::class,'edit'])->name('holsteinMilkWeight.edit');
Route::put('/holsteinMilk-weight/update/{id}',[HolsteinMilkWeightController::class,'update'])->name('holsteinMilkWeight.update');
Route::get('/holsteinmilk-weight-create',[HolsteinMilkWeightController::class,'create'])->name('holsteinmilkWeight.create');
Route::post('/holsteinmilk-weight-store',[HolsteinMilkWeightController::class,'store'])->name('holsteinmilkWeight.store');


// ** End Routes **


Route::get('/cow-list',[CowController::class,'list'])->name('cow.list');
Route::get('/cow/delete/{id}',[CowController::class,'delete'])->name('cow.delete');
Route::get('/cow/edit/{id}',[CowController::class,'edit'])->name('cow.edit');
Route::put('/cow/update/{id}',[CowController::class,'update'])->name('cow.update');
Route::get('/cow-create-form',[CowController::class,'create'])->name('cow.create');
Route::post('/cow-store',[CowController::class,'store'])->name('cow.store');


Route::get('/cowShade-list',[CowShadeController::class,'list'])->name('cowShade.list');
Route::get('/cowShade/delete/{id}',[CowShadeController::class,'delete'])->name('cowShade.delete');
Route::get('/cowShade/edit/{id}',[CowShadeController::class,'edit'])->name('cowShade.edit');
Route::put('/cowShade/update/{id}',[CowShadeController::class,'update'])->name('cowShade.update');
Route::get('/cowShade/delete/{id}',[CowShadeController::class,'delete'])->name('cowShade.delete');
Route::get('/cowShade-create-form',[CowShadeController::class,'create'])->name('cowShade.create');
Route::post('/cowShade-store',[CowShadeController::class,'store'])->name('cowShade.store');


// ** Route for Feed List and Schedule**
Route::get('/feed-list',[FeedController::class,'list'])->name('feed.list');
Route::get('/feed/delete/{id}',[FeedController::class,'delete'])->name('feed.delete');
Route::get('/feed/edit/{id}',[FeedController::class,'edit'])->name('feed.edit');
Route::put('/feed/update/{id}',[FeedController::class,'update'])->name('feed.update');
Route::get('/feed-create-form',[FeedController::class,'create'])->name('feed.create');
Route::post('/feedstore',[FeedController::class,'store'])->name('feed.store');


Route::get('/feedSchedule-list',[FeedScheduleController::class,'list'])->name('feedSchedule.list');
Route::get('/feedSchedule/delete/{id}',[FeedScheduleController::class,'delete'])->name('feedSchedule.delete');
Route::get('/feedSchedule/edit/{id}',[FeedScheduleController::class,'edit'])->name('feedSchedule.edit');
Route::put('/feedSchedule/update/{id}',[FeedScheduleController::class,'update'])->name('feedSchedule.update');
Route::get('/feedSchedule-create-form',[FeedScheduleController::class,'create'])->name('feedSchedule.create');
Route::post('/feedSchedule-store',[FeedScheduleController::class,'store'])->name('feedSchedule.store');
// ** End Routes **


Route::get('/milk-list',[MilkController::class,'list'])->name('milk.list');
Route::get('/milk/delete/{id}',[MilkController::class,'delete'])->name('milk.delete');
Route::get('/milk/edit/{id}',[MilkController::class,'edit'])->name('milk.edit');
Route::put('/milk/update/{id}',[MilkController::class,'update'])->name('milk.update');
Route::get('/milk-create-form',[MilkController::class,'create'])->name('milk.create');
Route::post('/milkstore',[MilkController::class,'store'])->name('milk.store');



Route::get('/staff-list',[StaffController::class,'list'])->name('staff.list');
Route::get('/staff/delete/{id}',[StaffController::class,'delete'])->name('staff.delete');
Route::get('/staff/edit/{id}',[StaffController::class,'edit'])->name('staff.edit');
Route::put('/staff/update/{id}',[StaffController::class,'update'])->name('staff.update');
Route::get('/staff-create-form',[StaffController::class,'create'])->name('staff.create');
Route::post('/staff-store',[StaffController::class,'store'])->name('staff.store');




Route::get('/vaccineMonitor-list',[VaccineMonitorController::class,'list'])->name('vaccineMonitor.list');
Route::get('/vaccineMonitor/delete/{id}',[VaccineMonitorController::class,'delete'])->name('vaccineMonitor.delete');
Route::get('/vaccineMonitor/edit/{id}',[VaccineMonitorController::class,'edit'])->name('vaccineMonitor.edit');
Route::put('/vaccineMonitor/update/{id}',[VaccineMonitorController::class,'update'])->name('vaccineMonitor.update');
Route::get('/vaccineMonitor-create-form',[VaccineMonitorController::class,'create'])->name('vaccineMonitor.create');
Route::post('/vaccineMonitor-store',[VaccineMonitorController::class,'store'])->name('vaccineMonitor.store');



//vaccine Schedule
Route::get('/vaccineSchedule-list',[VaccineScheduleController::class,'list'])->name('vaccineSchedule.list');
Route::get('/vaccineSchedule-create-form',[VaccineScheduleController::class,'create'])->name('vaccineSchedule.create');
Route::post('/vaccineSchedule-store',[VaccineScheduleController::class,'store'])->name('vaccineSchedule.store');
Route::get('/vaccineSchedule-delete/{id}',[VaccineScheduleController::class,'delete'])->name('vaccineSchedule.delete');
Route::get('/vaccineSchedule/edit/{id}',[VaccineScheduleController::class,'edit'])->name('vaccineSchedule.edit');
Route::put('/vaccineSchedule/update/{id}',[VaccineScheduleController::class,'update'])->name('vaccineSchedule.update');;



// Route::get('/profile-show',[UserController::class,'profileShow'])->name('profile.show');

Route::get('/profile',[UserController::class,'profile'])->name('admin.profile');
Route::put('/profile-update/{id}',[UserController::class,'update'])->name('updateprofile');


/* Report section
--/ Staff Report--*/


Route::get('/allreport',[ReportController::class,'all_Report'])->name('all.report');
//  --/ Staff Report--*/
 Route::get('/staff-report',[StaffController::class,'staff_Report'])->name('staff.report');
 Route::get('/staffreport/search',[StaffController::class,'staff_Report_Search'])->name('staff.report.search');    

//  --/ CowShade Report--*/
 Route::get('/cowShade-report',[CowShadeController::class,'cowShade_Report'])->name('cowShade.report');
 Route::get('/cowShadereport/search',[CowShadeController::class,'cowShade_Report_Search'])->name('cowShade.report.search');  


 //  --/ CowList Report--*/
 Route::get('/cow-report',[CowController::class,'cow_Report'])->name('cow.report');
 Route::get('/cowreport/search',[CowController::class,'cow_Report_Search'])->name('cow.report.search'); 

 //  --/ Category Report--*/
 Route::get('/category-report',[CategoriesController::class,'category_Report'])->name('category.report');
 Route::get('/categoryreport/search',[CategoriesController::class,'category_Report_Search'])->name('category.report.search'); 

 //  --/ FeedList Report--*/
 Route::get('/feed-report',[FeedController::class,'feed_Report'])->name('feed.report');
 Route::get('/feedreport/search',[FeedController::class,'feed_Report_Search'])->name('feed.report.search'); 

 //  --/ FeedSchedule Report--*/
 Route::get('/feedSchedule-report',[FeedScheduleController::class,'feedSchedule_Report'])->name('feedSchedule.report');
 Route::get('/feedSchedulereport/search',[FeedScheduleController::class,'feedSchedule_Report_Search'])->name('feedSchedule.report.search'); 


  //  --/ FeedList Report--*/
  Route::get('/milk-report',[MilkController::class,'milk_Report'])->name('milk.report');
  Route::get('/milkreport/search',[MilkController::class,'milk_Report_Search'])->name('milk.report.search');


 //  --/ Vaccine Monitor Report--*/
 Route::get('/vaccineMonitor-report',[VaccineMonitorController::class,'vaccineMonitor_Report'])->name('vaccineMonitor.report');
 Route::get('/vaccineMonitorreport/search',[VaccineMonitorController::class,'vaccineMonitor_Report_Search'])->name('vaccineMonitor.report.search'); 

 //  --/ Vaccine Schedule Report--*/
 Route::get('/vaccineSchedule-report',[VaccineScheduleController::class,'vaccineSchedule_Report'])->name('vaccineSchedule.report');
 Route::get('/vaccineSchedulereport/search',[VaccineScheduleController::class,'vaccineSchedule_Report_Search'])->name('vaccineSchedule.report.search'); 

});

