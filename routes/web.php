<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmitContactForm;

Route::inertia('/', 'Home')
    ->name('front.home');

Route::inertia('/services', 'Services')
    ->name('front.services');

Route::inertia('/contact', 'Contact')
    ->name('front.contact');

Route::inertia('/privacy-policy', 'PrivacyPolicy')
    ->name('front.privacy-policy');

Route::inertia('/returns-and-refunds', 'ReturnsAndRefunds')
    ->name('front.returns-and-refunds');

Route::inertia('/terms-and-conditions', 'TermsAndConditions')
    ->name('front.terms-and-conditions');

Route::post('/contact', SubmitContactForm::class)
    ->name('front.contact.store');
