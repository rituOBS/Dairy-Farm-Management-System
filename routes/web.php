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
use App\Http\Controllers\FeedController;
use App\Http\Controllers\MilkController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\CategoriesController;

use App\Http\Controllers\UserController;


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/all-products',[WebsiteProductController::class,'allProducts'])->name('website.all-products');

Route::get('/customer-login',[HomeController::class,'login'])->name('customer.login');
Route::post('/customer-dologin',[CustomerController::class,'dologin'])->name('customer.dologin');


Route::get('/products-under-category/{categoryId}',[WebsiteProductController::class,'categoryWiseProducts'])->name('category.products');

Route::get('/search',[HomeController::class,'search'])->name('search');


Route::get('/customer-registration',[HomeController::class,'registration'])->name('customer.registration');
Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');


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

//Brown controller
Route::get('/brown-cow',[BrownController::class,'index'])->name('brownCow.index');
//Route::get('/brown/delete/{id}',[BrownController::class,'delete'])->name('browncow.delete');
Route::get('/brown-cow-create',[BrownController::class,'create'])->name('brownCow.create');
Route::post('/brown-cow-store',[BrownController::class,'store'])->name('brownCow.store');



//feeding Item
Route::get('/feeding-item',[FeedingController::class,'index'])->name('feeding.index');
Route::get('/feeding/delete/{id}',[FeedingController::class,'delete'])->name('feeding.delete');
Route::get('/feeding-item-create',[FeedingController::class,'create'])->name('feeding.create');
Route::post('/feeding-item-store',[FeedingController::class,'store'])->name('feeding.store');


Route::get('/milk-weight',[MilkWeightController::class,'index'])->name('milkWeight.index');
Route::get('/milk-weight-create',[MilkWeightController::class,'create'])->name('milkWeight.create');
Route::post('/milk-weight-store',[MilkWeightController::class,'store'])->name('milkWeight.store');


Route::get('/brownCow-gender',[BrownCowGenderController::class,'index'])->name('brownCowGender.index');
Route::get('/brownCow-gender-create',[BrownCowGenderController::class,'create'])->name('brownCowGender.create');
Route::post('/brownCow-gender-store',[BrownCowGenderController::class,'store'])->name('brownCowGender.store');

//Bessie-cow
Route::get('/bessie-cow',[BessieController::class,'index'])->name('bessieCow.index');
//Route::get('/bessie/delete/{id}',[BessieController::class,'delete'])->name('bessiecow.delete');
Route::get('/bessie-cow-create',[BessieController::class,'create'])->name('bessieCow.create');
Route::post('/bessie-cow-store',[BessieController::class,'store'])->name('bessieCow.store');


Route::get('/bessie-feeding-item',[BessieFeedingController::class,'index'])->name('bessieFeeding.index');
Route::get('/bessie-feeding/delete/{id}',[BessieFeedingController::class,'delete'])->name('bessieFeeding.delete');
Route::get('/bessie-feeding-item-create',[BessieFeedingController::class,'create'])->name('bessieFeeding.create');
Route::post('/bessie-feeding-item-store',[BessieFeedingController::class,'store'])->name('bessieFeeding.store');

Route::get('/bessieCow-gender',[BessieCowGenderController::class,'index'])->name('bessieCowGender.index');
Route::get('/bessieCow-gender-create',[BessieCowGenderController::class,'create'])->name('bessieCowGender.create');
Route::post('/bessieCow-gender-store',[BessieCowGenderController::class,'store'])->name('bessieCowGender.store');


Route::get('/indian-cow',[IndianController::class,'index'])->name('indianCow.index');
//Route::get('/indian-cow/delete/{id}',[IndianController::class,'delete'])->name('indianCow.delete');
Route::get('/indian-cow-create',[IndianController::class,'create'])->name('indianCow.create');
Route::post('/indian-cow-store',[IndianController::class,'store'])->name('indianCow.store');

Route::get('/indian-feeding-item',[IndianFeedingController::class,'index'])->name('indianFeeding.index');
//Route::get('/bessie-feeding/delete/{id}',[BessieFeedingController::class,'delete'])->name('bessieFeeding.delete');
Route::get('/indian-feeding-item-create',[IndianFeedingController::class,'create'])->name('indianFeeding.create');
Route::post('/indian-feeding-item-store',[IndianFeedingController::class,'store'])->name('indianFeeding.store');

Route::get('/indianCow-gender',[IndianCowGenderController::class,'index'])->name('indianCowGender.index');
Route::get('/indianCow-gender-create',[IndianCowGenderController::class,'create'])->name('indianCowGender.create');
Route::post('/indianCow-gender-store',[IndianCowGenderController::class,'store'])->name('indianCowGender.store');


Route::get('/holstein-cow',[HolsteinController::class,'index'])->name('holsteinCow.index');
Route::get('/holstein-cow-create',[HolsteinController::class,'create'])->name('holsteinCow.create');
Route::post('/holstein-cow-store',[HolsteinController::class,'store'])->name('holsteinCow.store');

Route::get('/holstein-feeding-item',[HolsteinFeedingController::class,'index'])->name('holsteinFeeding.index');
Route::get('/holstein-feeding/delete/{id}',[HolsteinFeedingController::class,'delete'])->name('holsteinFeeding.delete');
Route::get('/holstein-feeding-item-create',[HolsteinFeedingController::class,'create'])->name('holsteinFeeding.create');
Route::post('/holstein-feeding-item-store',[HolsteinFeedingController::class,'store'])->name('holsteinFeeding.store');

Route::get('/holsteinmilk-weight',[HolsteinMilkWeightController::class,'index'])->name('holsteinmilkWeight.index');
Route::get('/holsteinmilk-weight-create',[HolsteinMilkWeightController::class,'create'])->name('holsteinmilkWeight.create');
Route::post('/holsteinmilk-weight-store',[HolsteinMilkWeightController::class,'store'])->name('holsteinmilkWeight.store');


Route::get('/holsteinCow-gender',[HolsteinCowGenderController::class,'index'])->name('holsteinCowGender.index');
Route::get('/holsteinCow-gender-create',[HolsteinCowGenderController::class,'create'])->name('holsteinCowGender.create');
Route::post('/holsteinCow-gender-store',[HolsteinCowGenderController::class,'store'])->name('holsteinCowGender.store');

Route::get('/cow-list',[CowController::class,'list'])->name('cow.list');
Route::get('/cow/delete/{id}',[CowController::class,'delete'])->name('cow.delete');
Route::get('/cow/edit/{id}',[CowController::class,'edit'])->name('cow.edit');
Route::put('/cow/update/{id}',[CowController::class,'update'])->name('cow.update');
Route::get('/cow-create-form',[CowController::class,'create'])->name('cow.create');
Route::post('/cow-store',[CowController::class,'store'])->name('cow.store');


Route::get('/feed-list',[FeedController::class,'list'])->name('feed.list');
Route::get('/feed/delete/{id}',[FeedController::class,'delete'])->name('feed.delete');
Route::get('/feed/edit/{id}',[FeedController::class,'edit'])->name('feed.edit');
Route::put('/feed/update/{id}',[FeedController::class,'update'])->name('feed.update');
Route::get('/feed-create-form',[FeedController::class,'create'])->name('feed.create');
Route::post('/feedstore',[FeedController::class,'store'])->name('feed.store');


Route::get('/milk-list',[MilkController::class,'list'])->name('milk.list');
Route::get('/milk/delete/{id}',[MilkController::class,'delete'])->name('milk.delete');
Route::get('/milk/edit/{id}',[MilkController::class,'edit'])->name('milk.edit');
Route::put('/milk/update/{id}',[MilkController::class,'update'])->name('milk.update');
Route::get('/milk-create-form',[MilkController::class,'create'])->name('milk.create');
Route::post('/milkstore',[MilkController::class,'store'])->name('milk.store');



Route::get('/staff-list',[StaffController::class,'list'])->name('staff.list');
Route::get('/staff/delete/{id}',[StaffController::class,'delete'])->name('staff.delete');
//Route::get('/staff/edit/{id}',[StaffController::class,'edit'])->name('product.edit');
Route::get('/staff-create-form',[StaffController::class,'create'])->name('staff.create');
Route::post('/staff-store',[StaffController::class,'store'])->name('staff.store');




Route::get('/product-list',[ProductController::class,'list'])->name('product.list');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::get('/product-create-form',[ProductController::class,'create'])->name('product.create');
Route::post('/product-store',[ProductController::class,'store'])->name('product.store');




Route::get('/vaccine-list',[VaccineController::class,'list'])->name('vaccine.list');
Route::get('/vaccine-create-form',[VaccineController::class,'create'])->name('vaccine.create');
Route::post('/vaccine-store',[VaccineController::class,'store'])->name('vaccine.store');


Route::get('/report',[ProductController::class,'report'])->name('report');
Route::post('/report/search',[ProductController::class,'reportSearch'])->name('report.search');





});
