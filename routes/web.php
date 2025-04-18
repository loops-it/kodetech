<?php

use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// Route::get('/dms', function () {
//     return view('dms');
// });


Route::get('/tech-stack', function () {
    return view('tech-stack');
});


// Route::get('/our-projects', function () {
//     return view('bind-pages.portfolio');
// });


Route::get('/our-projects', function () {
    return view('bind-pages.our-projects');
});

// Route::get('/portfolioDetails', function () {
//     return view('portfolioDetails');
// });


Route::get('/products/{slug}', [SlugController::class, 'ProductsShow'])->name('product.show');
Route::get('/services/{slug}', [SlugController::class, 'ServicesShow'])->name('ServicesShow');
Route::get('/project-details/{slug}', [SlugController::class, 'ProjectShow'])->name('ProjectShow');


// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'pageView']);