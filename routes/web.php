<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\LunchController;
use App\Http\Controllers\TakeAwayController;

Route::get('/', [CommonController::class, 'home'])->name('home');
Route::get('/om-oss', [CommonController::class, 'aboutUs'])->name('about-us');
Route::get('/kontakta-oss', [ContactController::class, 'contactUs'])->name('contact-us');
Route::post('/kontakta-oss', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/alla-cart-meny', [MainMenuController::class, 'mainMenu'])->name('main-menu');
Route::get('/lunch-meny', [LunchController::class, 'lunchMenu'])->name('lunch-menu');
Route::get('/take-away-meny', [TakeAwayController::class, 'takeAwayMenu'])->name('take-away-menu');
Route::get('/galleri', [CommonController::class, 'gallery'])->name('gallery');
Route::get('/catering', [CommonController::class, 'catering'])->name('catering');
Route::get('/download-pdf-menu', [CommonController::class, 'downloadPdf'])->name('download-pdf-menu');
