<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::delete('/media/{id}', [\App\Http\Controllers\Admin\Media\MediaController::class, 'destroy'])->name('media.destroy');
Route::get('login', [\App\Http\Controllers\Admin\Auth\AuthController::class, 'showLoginForm'])->name('login.page');
Route::post('store/login', [\App\Http\Controllers\Admin\Auth\AuthController::class, 'login'])->name('login');
Route::middleware('checkAuth')->group(function () {
    Route::get('store/logout', [\App\Http\Controllers\Admin\Auth\AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('settings')->controller(\App\Http\Controllers\Admin\Settings\SettingsController::class)->group(function () {
        Route::get('/', 'edit')->name('settings.edit');
        Route::put('/update/{id}', 'update')->name('settings.update');
    });
    Route::prefix('profile')->controller(\App\Http\Controllers\Admin\Profile\ProfileController::class)->group(function () {
        Route::get('/', 'edit')->name('profile.edit');
        Route::put('/update/{id}', 'update')->name('profile.update');
    });
    Route::prefix('categories')->controller(\App\Http\Controllers\Admin\Categories\CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('categories.index');
        Route::get('/create', 'create')->name('categories.create');
        Route::post('/store', 'store')->name('categories.store');
        Route::get('/{id}/edit', 'edit')->name('categories.edit');
        Route::put('/update/{id}', 'update')->name('categories.update');
        Route::delete('/delete/{id}', 'destroy')->name('categories.delete');
        Route::post('/change-status', 'changeStatus')->name('categories.status');
    });
    Route::prefix('services')->controller(\App\Http\Controllers\Admin\Services\ServicesController::class)->group(function () {
        Route::get('/', 'index')->name('services.index');
        Route::get('/create', 'create')->name('services.create');
        Route::post('/store', 'store')->name('services.store');
        Route::get('/{id}/edit', 'edit')->name('services.edit');
        Route::put('/update/{id}', 'update')->name('services.update');
        Route::delete('/delete/{id}', 'destroy')->name('services.delete');
        Route::post('/change-status', 'changeStatus')->name('services.status');
    });
    Route::prefix('products')->controller(\App\Http\Controllers\Admin\Products\ProductsController::class)->group(function () {
        Route::get('/', 'index')->name('products.index');
        Route::get('/create', 'create')->name('products.create');
        Route::post('/store', 'store')->name('products.store');
        Route::get('/{id}/edit', 'edit')->name('products.edit');
        Route::put('/update/{id}', 'update')->name('products.update');
        Route::delete('/delete/{id}', 'destroy')->name('products.delete');
        Route::post('/change-status', 'changeStatus')->name('products.status');
    });
    Route::prefix('contacts')->controller(\App\Http\Controllers\Admin\Contact\ContactController::class)->group(function () {
        Route::get('/', 'index')->name('contacts.index');
        Route::get('/create', 'create')->name('contacts.create');
        Route::post('/store', 'store')->name('contacts.store');
        Route::get('/{id}/edit', 'edit')->name('contacts.edit');
        Route::put('/update/{id}', 'update')->name('contacts.update');
        Route::delete('/delete/{id}', 'destroy')->name('contacts.delete');
        Route::post('/change-status', 'changeStatus')->name('contacts.status');
    });
    Route::prefix('users')->controller(\App\Http\Controllers\Admin\Users\UserController::class)->group(function () {
        Route::get('/', 'index')->name('users.index');
        Route::get('/create', 'create')->name('users.create');
        Route::post('/store', 'store')->name('users.store');
        Route::get('/{id}/edit', 'edit')->name('users.edit');
        Route::put('/update/{id}', 'update')->name('users.update');
        Route::delete('/delete/{id}', 'destroy')->name('users.delete');
        Route::post('/change-status', 'changeStatus')->name('users.status');
    });
    Route::prefix('sliders')->controller(\App\Http\Controllers\Admin\Sliders\SlidersController::class)->group(function () {
        Route::get('/', 'index')->name('sliders.index');
        Route::get('/create', 'create')->name('sliders.create');
        Route::post('/store', 'store')->name('sliders.store');
        Route::get('/{id}/edit', 'edit')->name('sliders.edit');
        Route::put('/update/{id}', 'update')->name('sliders.update');
        Route::delete('/delete/{id}', 'destroy')->name('sliders.delete');
        Route::post('/change-status', 'changeStatus')->name('sliders.status');
    });
    Route::prefix('subscription')->controller(\App\Http\Controllers\Admin\Subscription\SubscriptionController::class)->group(function () {
        Route::get('/', 'index')->name('subscription.index');
        Route::get('/create', 'create')->name('subscription.create');
        Route::post('/store', 'store')->name('subscription.store');
        Route::get('/{id}/edit', 'edit')->name('subscription.edit');
        Route::put('/update/{id}', 'update')->name('subscription.update');
        Route::delete('/delete/{id}', 'destroy')->name('subscription.delete');
        Route::post('/change-status', 'changeStatus')->name('subscription.status');
    });
    Route::prefix('features')->controller(\App\Http\Controllers\Admin\Features\FeatureController::class)->group(function () {
        Route::get('/', 'index')->name('features.index');
        Route::get('/create', 'create')->name('features.create');
        Route::post('/store', 'store')->name('features.store');
        Route::get('/{id}/edit', 'edit')->name('features.edit');
        Route::put('/update/{id}', 'update')->name('features.update');
        Route::delete('/delete/{id}', 'destroy')->name('features.delete');
        Route::post('/change-status', 'changeStatus')->name('features.status');
    });
    Route::prefix('reviews')->controller(\App\Http\Controllers\Admin\Reviews\ReviewController::class)->group(function () {
        Route::get('/', 'index')->name('reviews.index');
        Route::get('/create', 'create')->name('reviews.create');
        Route::post('/store', 'store')->name('reviews.store');
        Route::get('/{id}/edit', 'edit')->name('reviews.edit');
        Route::put('/update/{id}', 'update')->name('reviews.update');
        Route::delete('/delete/{id}', 'destroy')->name('reviews.delete');
        Route::post('/change-status', 'changeStatus')->name('reviews.status');
    });
    Route::prefix('blogs')->controller(\App\Http\Controllers\Admin\Blogs\BlogController::class)->group(function () {
        Route::get('/', 'index')->name('blogs.index');
        Route::get('/create', 'create')->name('blogs.create');
        Route::post('/store', 'store')->name('blogs.store');
        Route::get('/{id}/edit', 'edit')->name('blogs.edit');
        Route::put('/update/{id}', 'update')->name('blogs.update');
        Route::delete('/delete/{id}', 'destroy')->name('blogs.delete');
        Route::post('/change-status', 'changeStatus')->name('blogs.status');
    });
    Route::prefix('pages')->controller(\App\Http\Controllers\Admin\Pages\PageController::class)->group(function () {
        Route::get('/', 'index')->name('pages.index');
        Route::get('/create', 'create')->name('pages.create');
        Route::post('/store', 'store')->name('pages.store');
        Route::get('/{id}/edit', 'edit')->name('pages.edit');
        Route::put('/update/{id}', 'update')->name('pages.update');
        Route::delete('/delete/{id}', 'destroy')->name('pages.delete');
        Route::post('/change-status', 'changeStatus')->name('pages.status');
    });
    Route::prefix('value_add')->controller(\App\Http\Controllers\Admin\ValueAdd\ValueAddController::class)->group(function () {
        Route::get('/', 'index')->name('value_add.index');
        Route::get('/create', 'create')->name('value_add.create');
        Route::post('/store', 'store')->name('value_add.store');
        Route::get('/{id}/edit', 'edit')->name('value_add.edit');
        Route::put('/update/{id}', 'update')->name('value_add.update');
        Route::delete('/delete/{id}', 'destroy')->name('value_add.delete');
        Route::post('/change-status', 'changeStatus')->name('value_add.status');
    });
    Route::prefix('what_we_do')->controller(\App\Http\Controllers\Admin\WhatWeDo\WhatWeDoController::class)->group(function () {
        Route::get('/', 'index')->name('what_we_do.index');
        Route::get('/create', 'create')->name('what_we_do.create');
        Route::post('/store', 'store')->name('what_we_do.store');
        Route::get('/{id}/edit', 'edit')->name('what_we_do.edit');
        Route::put('/update/{id}', 'update')->name('what_we_do.update');
        Route::delete('/delete/{id}', 'destroy')->name('what_we_do.delete');
        Route::post('/change-status', 'changeStatus')->name('what_we_do.status');
    });
    Route::prefix('blogs_category')->controller(\App\Http\Controllers\Admin\BlogCategory\BlogCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('blogs_category.index');
        Route::get('/create', 'create')->name('blogs_category.create');
        Route::post('/store', 'store')->name('blogs_category.store');
        Route::get('/{id}/edit', 'edit')->name('blogs_category.edit');
        Route::put('/update/{id}', 'update')->name('blogs_category.update');
        Route::delete('/delete/{id}', 'destroy')->name('blogs_category.delete');
        Route::post('/change-status', 'changeStatus')->name('blogs_category.status');
    });
    Route::prefix('value_add_category')->controller(\App\Http\Controllers\Admin\ValueAddCategory\ValueAddCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('value_add_category.index');
        Route::get('/create', 'create')->name('value_add_category.create');
        Route::post('/store', 'store')->name('value_add_category.store');
        Route::get('/{id}/edit', 'edit')->name('value_add_category.edit');
        Route::put('/update/{id}', 'update')->name('value_add_category.update');
        Route::delete('/delete/{id}', 'destroy')->name('value_add_category.delete');
        Route::post('/change-status', 'changeStatus')->name('value_add_category.status');
    });
    Route::prefix('what_we_do_category')->controller(\App\Http\Controllers\Admin\WhatWeDoCategory\WhatWeDoCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('what_we_do_category.index');
        Route::get('/create', 'create')->name('what_we_do_category.create');
        Route::post('/store', 'store')->name('what_we_do_category.store');
        Route::get('/{id}/edit', 'edit')->name('what_we_do_category.edit');
        Route::put('/update/{id}', 'update')->name('what_we_do_category.update');
        Route::delete('/delete/{id}', 'destroy')->name('what_we_do_category.delete');
        Route::post('/change-status', 'changeStatus')->name('what_we_do_category.status');
    });
    Route::prefix('technical_data_sheets')->controller(\App\Http\Controllers\Admin\TechnicalDataSheets\TechnicalDataSheetsController::class)->group(function () {
        Route::get('/', 'index')->name('technical_data_sheets.index');
        Route::get('/create', 'create')->name('technical_data_sheets.create');
        Route::post('/store', 'store')->name('technical_data_sheets.store');
        Route::get('/{id}/edit', 'edit')->name('technical_data_sheets.edit');
        Route::put('/update/{id}', 'update')->name('technical_data_sheets.update');
        Route::delete('/delete/{id}', 'destroy')->name('technical_data_sheets.delete');
        Route::post('/change-status', 'changeStatus')->name('technical_data_sheets.status');
    });
});
