<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name("home");
    Route::get('/about', 'about')->name("about");
    Route::get('/blog', 'blog')->name("blog");
    Route::get('/blog-details', 'blogDetails')->name("blog.details");
    Route::get('/faqs', 'faqs')->name("faqs");
    Route::get('/contact', 'contact')->name("contact");
});