<?php

use App\Http\Controllers\Api\CallBackController;
use App\Http\Controllers\Api\BackendDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Payment callback
Route::post('v1/Checkout/Callback', [CallBackController::class, 'callBack']);

// Backend Data API Routes
Route::prefix('v1/backend')->group(function () {
    // Single resources
    Route::get('about', [BackendDataController::class, 'getAboutUs']);
    Route::get('categories', [BackendDataController::class, 'getCategories']);
    Route::get('news-categories', [BackendDataController::class, 'getNewsCategories']);
    Route::get('faqs', [BackendDataController::class, 'getFaqs']);
    Route::get('faq-categories', [BackendDataController::class, 'getFaqCategories']);
    Route::get('news', [BackendDataController::class, 'getNews']);
    Route::get('programs', [BackendDataController::class, 'getPrograms']);
    Route::get('sliders', [BackendDataController::class, 'getSliders']);
    Route::get('testimonials', [BackendDataController::class, 'getTestimonials']);
    
    // Get all data in one request
    Route::get('all', [BackendDataController::class, 'getAllData']);
});
