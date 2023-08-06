<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ProductController as WebsiteProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CowController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\MilkController;
use App\Http\Controllers\SalesreportController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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


Route::get('/employee-list',[EmployeeController::class,'list'])->name('employee.list');
Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete');
Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::put('/employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/employee-create-form',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employee-store',[EmployeeController::class,'store'])->name('employee.store'); 


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



Route::get('/order-list',[OrderController::class,'list'])->name('order.list');
Route::get('/order/delete/{id}',[OrderController::class,'delete'])->name('order.delete');
Route::get('/order-create-form',[OrderController::class,'create'])->name('order.create');
Route::post('/orderstore',[OrderController::class,'store'])->name('order.store');



Route::get('/product-list',[ProductController::class,'list'])->name('product.list');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::get('/product-create-form',[ProductController::class,'create'])->name('product.create');
Route::post('/product-store',[ProductController::class,'store'])->name('product.store');




Route::get('/salesreport-list',[SalesreportController::class,'list'])->name('salesreport.list');
Route::get('/salesreport-create-form',[SalesreportController::class,'create'])->name('salesreport.create');
Route::post('/salesreportstore',[SalesreportController::class,'store'])->name('salesreport.store');



Route::get('/report',[ProductController::class,'report'])->name('report');
Route::post('/report/search',[ProductController::class,'reportSearch'])->name('report.search');





});
