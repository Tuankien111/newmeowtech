<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'localization'], function () {
    //Home
    Route::get('/', [HomeController::class, 'index'])->name('home');

    //Services
    Route::get('/services', [ServiceController::class, 'index'])->name('service');
    Route::get('/services/data-solutions', [ServiceController::class, 'show'])->name('data');
    Route::get('/services/ai-chatbot-for-business', [ServiceController::class, 'showChatbot'])->name('chatbot');
    Route::get('/services/data-solutions/{name}', [ServiceController::class, 'showDatasolution']);

    //About_US
    Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutus');

    //Careers
    Route::get('/careers', [CareerController::class, 'index'])->name('career');
    Route::get('/careers/{job}', [CareerController::class, 'showCareers']);


    //Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');

    //Blog
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/detail/{id}', [BlogController::class, 'showDetail']);

    //Real-time-Dashboard
    Route::get('/real-time-dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    //404 page
    Route::get('/404', function () {
        return view('error.404');
    })->name('error');

    //pp-ceo
    Route::get('/pp/cto', function () {
        return view('pp.cto');
    })->name('pp');

    //pp-members
    Route::get('/member/{name}', function ($name) {
        return view('pp/members.' . $name);
    });

    // Change language
    Route::get('lang/{language}', [HomeController::class, 'changeLanguage'])->name('change-language');
});
