<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\Admin\DashboardController;
use App\Http\Controllers\Backend\Admin\UserController;
use App\Http\Controllers\Backend\User\UserDashboardController;
use App\Http\Controllers\Backend\NurseryOwner\NurseryDashboardController;
use App\Http\Controllers\Backend\NurseryOwner\ProdictController;



Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name("home");
    Route::get('/about', 'about')->name("about");
    Route::get('/blog', 'blog')->name("blog");
    Route::get('/blog-details', 'blogDetails')->name("blog.details");
    Route::get('/faqs', 'faqs')->name("faqs");
    Route::get('/contact', 'contact')->name("contact");
    Route::get('/login', 'login')->name("login");
    Route::get('/register', 'register')->name("register");
});


// ********** Admin Routes ********* role == 1
Route::group(['prefix' => 'admin','middleware' => ['auth','verified', 'admin']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
    Route::get('/web-visitor', [DashboardController::class, 'webVisitor'])->name('web.visitor');
    Route::resource('/users', UserController::class);
    Route::get('/product-list', [DashboardController::class, 'productList'])->name('admin.product');
});

// ********** User Routes ********* role == 4
Route::group(['prefix' => 'user','middleware' => ['auth','verified', 'user']], function() {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/profile', [UserDashboardController::class, 'profile'])->name('user.profile');
});

// **********  Nursery Owner Route ********* role == 2
Route::group(['prefix' => 'nursery-owner','middleware' => ['auth','verified', 'nursery_owner']], function() {
    Route::get('/dashboard', [NurseryDashboardController::class, 'index'])->name('nurseryOwner.dashboard');
    Route::get('/profile', [NurseryDashboardController::class, 'profile'])->name('nursery_owner.profile');
    Route::resource('/product', ProdictController::class);
});


// ********** Consultant Routes ********* role == 3
Route::group(['prefix' => 'consultant','middleware' => ['auth','verified', 'consultant']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('consultant.dashboard');
});

require __DIR__.'/auth.php';
