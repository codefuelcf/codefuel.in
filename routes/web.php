<?php

use App\Http\Controllers\Front\ContactController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')
    ->name('front.home');

Route::prefix('/contact')->controller(ContactController::class)->group(function () {
    Route::get('/', 'index')
        ->name('front.contact');

    Route::post('/', 'store')
        ->name('front.contact.store');
});

Route::inertia('/privacy-policy', 'PrivacyPolicy')
    ->name('front.privacy-policy');

Route::inertia('/returns-and-refunds', 'ReturnsAndRefunds')
    ->name('front.returns-and-refunds');

Route::inertia('/terms-and-conditions', 'TermsAndConditions')
    ->name('front.terms-and-conditions');
