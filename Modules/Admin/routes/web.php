<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AddSectionController;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\BlogController;
use Modules\Admin\Http\Controllers\ProductController;
use Modules\Admin\Http\Controllers\ProjectController;
use Modules\Admin\Http\Controllers\ServiceController;
use Modules\Admin\Http\Controllers\UserController;
use Modules\Admin\Http\Controllers\ClientController;
use Modules\Admin\Http\Controllers\TestimonialController;
use Modules\Admin\Http\Middleware\AuthAdmin;


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
Route::prefix('admin')->group(function() {
    Route::match(['get', 'post'],'/', [UserController::class, 'login']);
    // Route::match(['get', 'post'],'/sign-up', [UserController::class, 'login']);
    Route::match(['get', 'post'],'/dashboard', [UserController::class, 'dashboard'])->middleware(AuthAdmin::class)->name('admin.dashbaord');
    Route::match(['get', 'post'],'/add-migrant', [UserController::class, 'addMigrant'])->middleware(AuthAdmin::class);
    Route::get('/logout', [UserController::class, 'logout']);
});


Route::prefix('admin')->group(function(){
    Route::match(['get','post'],'/add-project',[ProjectController::class, 'addProject'])->middleware((AuthAdmin::class));


    Route::match(['get','post'],'/add-product',[ProductController::class, 'addProduct'])->middleware((AuthAdmin::class));
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->middleware(AuthAdmin::class)->name('product.edit');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->middleware(AuthAdmin::class)->name('product.update');
    Route::delete('/delete-product/{id}', [ProductController::class, 'destroy'])->middleware(AuthAdmin::class)->name('product.destroy');


    Route::match(['get','post'],'/add-service',[ServiceController::class, 'addService'])->middleware((AuthAdmin::class));
    Route::match(['get','post'],'/add-client',[ClientController::class, 'addClient'])->middleware((AuthAdmin::class));
    Route::match(['get','post'],'/add-testimonial',[TestimonialController::class, 'addTestimonial'])->middleware((AuthAdmin::class));
    Route::match(['get','post'],'/add-blog',[BlogController::class, 'addBlog'])->middleware((AuthAdmin::class));
});



Route::get('/about', function () {
    return view('about');
});


Route::get('/techstack', function () {
    return view('techstack');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfoliodetails', function () {
    return view('portfoliodetails');
});

Route::get('/servicedetails', function () {
    return view('serviceDetails');
});

