<?php

use Illuminate\Support\Facades\Route;


Route::get('/',                            [App\Http\Controllers\Web\HomeController::class, 'index'])->name('home');
Route::get('/services',                    [App\Http\Controllers\Web\ServiceController::class, 'index'])->name('services');
Route::get('/about',                       [App\Http\Controllers\Web\AboutController::class, 'index'])->name('about');
Route::get('/services/details/{id}',       [App\Http\Controllers\Web\ServiceController::class, 'show'])->name('services.details');
Route::get('/products/{category}',         [App\Http\Controllers\Web\ProductController::class, 'index'])->name('products');
Route::get('/what-we-do/{category}',       [App\Http\Controllers\Web\WhatWeDoController::class, 'index'])->name('what');
Route::get('/value-add/{category}',        [App\Http\Controllers\Web\ValueAddController::class, 'index'])->name('value');
Route::get('/blog/{category}',             [App\Http\Controllers\Web\BlogController::class, 'index'])->name('blog');
Route::get('/product/details/{id}',        [App\Http\Controllers\Web\ProductController::class, 'show'])->name('product.details');
Route::get('/blog/details/{id}',           [App\Http\Controllers\Web\BlogController::class, 'show'])->name('blog.details');
Route::get('/value-add/details/{id}',      [App\Http\Controllers\Web\ValueAddController::class, 'show'])->name('value.details');
Route::get('/what-we-do/details/{id}',     [App\Http\Controllers\Web\WhatWeDoController::class, 'show'])->name('what.details');
Route::get('/contact',                     [App\Http\Controllers\Web\ContactController::class, 'index'])->name('contact');
Route::post('/contact/store',              [App\Http\Controllers\Web\ContactController::class, 'store'])->name('contact.store');
Route::post('/subscription',               [App\Http\Controllers\Web\SubscriptionController::class, 'store'])->name('subscription');
Route::get('/tds',                         [App\Http\Controllers\Web\TechnicalDataSheetsController::class, 'index'])->name('tds');
