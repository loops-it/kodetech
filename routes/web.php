<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\SlugController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\BlogController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/blogDetails', function () {
    return view('bind-pages.blogDetails');
});


Route::get('/careers', function () {
    return view('careers');
});


Route::get('/our-projects', function () {
    return view('bind-pages.our-projects');
});


Route::get('/tech-stack', function () {
    return view('bind-pages.tech-stack');
});


Route::get('/products/{slug}', [SlugController::class, 'ProductsShow'])->name('product.show');
Route::get('/services/{slug}', [SlugController::class, 'ServicesShow'])->name('ServicesShow');
Route::get('/project-details/{slug}', [SlugController::class, 'ProjectShow'])->name('ProjectShow');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details/{slug}', [SlugController::class, 'BlogShow'])->name('BlogShow');

Route::post('/mailSubmit', [MailController::class, 'mailSubmit'])->name('mailSubmit');
