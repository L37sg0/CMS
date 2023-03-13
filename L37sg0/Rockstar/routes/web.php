<?php

use L37sg0\Rockstar\Http\Controllers\AdminController;
use L37sg0\Rockstar\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

/**
 * Front Section
 */
Route::match(['get','post'], '', [FrontendController::class, 'index']);

/**
 * Admin Section
 */
Route::middleware(['web', 'auth'])->group(function () {
    Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], static function () {
        Route::match(['get', 'post'], '', [AdminController::class, 'iconSection'])->name('icon-section');
        Route::match(['get', 'post'], 'icon-section', [AdminController::class, 'iconSection'])->name('icon-section');
        Route::match(['get', 'post'], 'home-section', [AdminController::class, 'homeSection'])->name('home-section');
        Route::match(['get', 'post'], 'band-section', [AdminController::class, 'bandSection'])->name('band-section');
        Route::match(['get', 'post'], 'tour-section', [AdminController::class, 'tourSection'])->name('tour-section');
        Route::match(['get', 'post'], 'contact-section', [AdminController::class, 'contactSection'])->name('contact-section');
        Route::match(['get', 'post'], 'social-section', [AdminController::class, 'socialSection'])->name('social-section');
    });
});
