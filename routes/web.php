<?php

use App\Http\Controllers\Front\ContactFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\SubmitContactForm;

Route::inertia('/', 'Home')
    ->name('front.home');

Route::prefix('/contact')->controller(ContactFormController::class)->group(function () {
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
