<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\ProgramController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TestmonialController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('login',[HomeController::class,'loginForm'])->name('login');
Route::get('register',[HomeController::class,'registerForm'])->name('register');
Route::get('book/trainer',[HomeController::class,'bookTrainer'])->name('book.trainer');
Route::post('book/training',[HomeController::class,'bookTraining'])->name('book.training');
Route::get('add/cart/{program}',[HomeController::class,'addcart'])->name('add.cart');
Route::get('remove/cart/{rowId}',[HomeController::class,'removeCart'])->name('remove.cart');
Route::get('cart/checkout',[HomeController::class,'cartcheckout'])->name('cart.checkout');
Route::get('cart/checkout/process',[HomeController::class,'cartProcess'])->name('complete.check.out');
Route::get('program/view/{uuid}',[HomeController::class,'programView'])->name('program.view');
Route::get('all/programs/{cat_name?}',[HomeController::class,'allPrograms'])->name('all.programs');
Route::get('blog/view/{uuid}',[HomeController::class,'blogView'])->name('blog.view');
Route::get('blogs',[HomeController::class,'blogs'])->name('blogs');
Route::get('contact/us',[HomeController::class,'contactUs'])->name('contact.us');
Route::post('authentic/user',[LoginController::class,'authentication'])->name('authenticate.user');
Route::post('user/register',[RegisterController::class,'storeUser'])->name('register.user');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>"auth"],function(){
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
    Route::get('change-password',[LoginController::class,'changePasswordForm'])->name('change.password');
    Route::post('change-password-request',[LoginController::class,'changePassword'])->name('change.password.request');
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::post('upload', [ProgramController::class, 'upload'])->name('upload');
    Route::delete('revert', [ProgramController::class, 'revert'])->name('revert');
    Route::get('news/category', [CategoryController::class, 'newsCategory'])->name('categories.news');
    Route::post('store/news/category', [CategoryController::class, 'storeNewsCategory'])->name('categories.news.store');
    Route::post('store/news/letter', [NewsController::class, 'storeNewsLetter'])->name('news.letter.store');
    Route::get('news/letter/subscribers', [NewsController::class, 'newsSubcribers'])->name('news.subcribers');
    Route::get('list/of/bookings', [BackendHomeController::class, 'bookings'])->name('list.bookings');
    Route::get('orders', [BackendHomeController::class, 'allOrders'])->name('orders');

    // User
    Route::get('my-account',[UserController::class,'index'])->name('my.account');

    Route::resources([
        'categories'    =>CategoryController::class,
        'programs'      =>ProgramController::class,
        'sliders'       =>SliderController::class,
        'testmonials'   =>TestmonialController::class,
        'abouts'        =>AboutController::class,
        'news'          =>NewsController::class,
    ]);
});

