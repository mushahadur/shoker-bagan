<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\Admin\UserController;
use App\Http\Controllers\Backend\Consultant\ConController;
use App\Http\Controllers\Backend\User\UserOrderController;
use App\Http\Controllers\Backend\Admin\DashboardController;
use App\Http\Controllers\Backend\Consultant\ServiceController;
use App\Http\Controllers\Backend\User\UserDashboardController;
use App\Http\Controllers\Backend\Consultant\ConOrderController;
use App\Http\Controllers\Backend\NurseryOwner\ProdictController;
use App\Http\Controllers\Backend\NurseryOwner\NurseryDashboardController;



Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name("home");
    Route::get('/about', 'about')->name("about");
    Route::get('/blog', 'blog')->name("blog");
    Route::get('/blog-details', 'blogDetails')->name("blog.details");
    Route::get('/faqs', 'faqs')->name("faqs");
    Route::get('/contact', 'contact')->name("contact");
    Route::post('/send-message', 'messageSend')->name("send.massage");
    //Product Route
    Route::get('/all-product', 'allProduct')->name("all.products");
    Route::get('/product-details/{id}', 'productDetails')->name("home.product.details");

    Route::get('/all-consultants', 'allConsultant')->name("all.consultants");
    Route::get('/consultant-details/{id}', 'consultantDetails')->name('consultant.details');

    Route::get('/all-nursery-owner', 'nurseryOwners')->name("all.nurseryOwners");
    Route::get('/nursery-owner-details/{id}', 'nurseryOwnerDetails')->name('nurseryOwner.details');

    Route::get('/login', 'login')->name("login");
    Route::get('/register', 'register')->name("register");
});


// ********** Admin Routes ********* role == 1
Route::group(['prefix' => 'admin','middleware' => ['auth','verified', 'admin']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
    Route::post('/update-admin-profile/{id}', [DashboardController::class, 'profileUpdate'])->name('update.adminProfile');
    Route::get('/web-visitor', [DashboardController::class, 'webVisitor'])->name('web.visitor');
    Route::get('/contact-list', [DashboardController::class, 'contactList'])->name('contact.list');
    Route::resource('/users', UserController::class);
    //For Product Controller
    Route::get('/product-list', [DashboardController::class, 'productList'])->name('admin.product');
    Route::get('/product-active-status/{id}', [DashboardController::class, 'activeStatus'])->name('product.activeStatus');
    Route::get('/product-status/{id}', [DashboardController::class, 'inactiveStatus'])->name('product.inactiveStatus');
    Route::get('/product-detail/{id}', [DashboardController::class, 'productDetails'])->name('product.details');

    Route::get('/nursery-owner-list', [DashboardController::class, 'nurseryList'])->name('nursery.owner.list');
    Route::get('/consultant-list', [DashboardController::class, 'consultantList'])->name('consultant.list');
});

// ********** User Routes ********* role == 4
Route::group(['prefix' => 'user','middleware' => ['auth','verified', 'user']], function() {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/faq', [UserDashboardController::class, 'faq'])->name('user.faq');
    //For Profile
    Route::get('/profile', [UserDashboardController::class, 'profile'])->name('user.profile');
    Route::post('/update-profile/{id}', [UserDashboardController::class, 'profileUpdate'])->name('update.profile');
    //For Consultant
    Route::get('/contact-consultant', [UserDashboardController::class, 'contactConsultants'])->name('user.contactConsultants');
    Route::get('/contact-consultant-history', [UserDashboardController::class, 'contactConsultantsHistory'])->name('user.contactConsultantsHistory');
    // Order 
    Route::get('/confirm-order/{user_id}/{product_id}', [UserOrderController::class, 'confirmOrder'])->name('confirmOrder');
    
    //For Order Controller
    Route::get('/order-list', [UserOrderController::class, 'index'])->name('user.orderList');
    Route::get('/order-history', [UserOrderController::class, 'orderHistory'])->name('user.orderHistory');
});

// **********  Nursery Owner Route ********* role == 2
Route::group(['prefix' => 'nursery-owner','middleware' => ['auth','verified', 'nursery_owner']], function() {
    Route::get('/dashboard', [NurseryDashboardController::class, 'index'])->name('nurseryOwner.dashboard');
    Route::get('/profile', [NurseryDashboardController::class, 'profile'])->name('nursery_owner.profile');
    Route::post('/update-profile/{id}', [NurseryDashboardController::class, 'profileUpdate'])->name('update.nurseryProfile');
    Route::resource('/product', ProdictController::class);

    Route::get('/faq', [NurseryDashboardController::class, 'faq'])->name('nursery_owner.faq');
    // Order Route
    Route::get('/order-list', [NurseryDashboardController::class, 'orderList'])->name('listOrder');
});


// ********** Consultant Routes ********* role == 3
Route::group(['prefix' => 'consultant','middleware' => ['auth','verified', 'consultant']], function() {
    Route::get('/dashboard', [ConController::class, 'index'])->name('consultant.dashboard');
    Route::get('/faq', [ConController::class, 'faq'])->name('consultant.faq');
    //For Profile
    Route::get('/profile', [ConController::class, 'profile'])->name('consultant.profile');
    Route::post('/update-profile/{id}', [ConController::class, 'profileUpdate'])->name('update.profile');
    // Order 
    Route::get('/confirm-order/{user_id}/{product_id}', [ConOrderController::class, 'confirmOrder'])->name('confirmOrder.consultant');
    
    //For Order Controller
    Route::get('/order-list', [ConOrderController::class, 'index'])->name('consultant.orderList');
    Route::get('/order-history', [ConOrderController::class, 'orderHistory'])->name('consultant.orderHistory');

    // For Service Controller
    Route::resource('/service', ServiceController::class);

});

require __DIR__.'/auth.php';
