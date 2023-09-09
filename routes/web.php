<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    SubmitContactForm,
    SubscribeToNewsletter
};

Route::view('/', 'front.home')
    ->name('front.home');

Route::view('/about', 'front.about')
    ->name('front.about');

Route::view('/services', 'front.services')
    ->name('front.services');

Route::view('/privacy-policy', 'front.privacy-policy')
    ->name('front.privacy-policy');

Route::view('/terms-conditions', 'front.terms-and-conditions')
    ->name('front.terms-conditions');

Route::view('/contact', 'front.contact')
    ->name('front.contact');

Route::post('/contact', SubmitContactForm::class)
    ->name('front.contact.store');

Route::post('/newsletter', SubscribeToNewsletter::class)
    ->name('newsletter.store');
