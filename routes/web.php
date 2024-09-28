<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\SubmitContactForm;

Route::inertia('/', 'Home')
    ->name('front.home');

Route::prefix('/contact')->group(function () {
    Route::inertia('/', 'Contact')
        ->name('front.contact');

    Route::post('/', SubmitContactForm::class)
        ->name('front.contact.store');
});

Route::inertia('/privacy-policy', 'PrivacyPolicy')
    ->name('front.privacy-policy');

Route::inertia('/returns-and-refunds', 'ReturnsAndRefunds')
    ->name('front.returns-and-refunds');

Route::inertia('/terms-and-conditions', 'TermsAndConditions')
    ->name('front.terms-and-conditions');
