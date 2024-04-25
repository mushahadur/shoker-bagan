<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;


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

Route::controller(DashboardController::class)->group(function () {
    Route::get('/deshboard', 'deshboard')->name("deshboard");
    // Route::get('/about', 'about')->name("about");
});