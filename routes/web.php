<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

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



// User Route
Route::get('user/dashboard', function () {
    return view('backend.test.user.dashboard');
})->middleware(['auth','verified', 'user'])->name('user.dashboard');

// // Super Admin Route
Route::get('/nursery-woner/dashboard', function () {
    return view('backend.test.nursery.dashboard');
})->middleware(['auth','verified', 'nursery_woner'])->name('nurseryWoner.dashboard');

// Admin Route
Route::get('/admin/dashboard', function () {
    return view('backend.test.admin.dashboard');
})->middleware(['auth','verified', 'admin'])->name('admin.dashboard');

// My Controll Route
Route::get('/consultant/dashboard', function () {
    return view('backend.test.consultant.dashboard');
})->middleware(['auth','verified', 'consultant'])->name('consultant.dashboard');









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
