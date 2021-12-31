<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

// Home
// About
Route::view(
    '/',
    'front.home',
    ['title' => 'Websites, Web Applications & Designing']
)->name('front.home');

// About
Route::view(
    '/about',
    'front.about',
    ['title' => 'About']
)->name('front.about');

// Services
Route::view(
    '/services',
    'front.services',
    ['title' => 'Services']
)->name('front.services');

// Privacy Policy
Route::view(
    '/privacy-policy',
    'front.privacyPolicy',
    ['title' => 'Privacy Policy']
)->name('front.privacy-policy');

// Terms and Conditions
Route::view(
    '/terms-conditions',
    'front.termsConditions',
    ['title' => 'Terms & Conditions']
)->name('front.terms-conditions');

// Contact
Route::view(
    '/contact',
    'front.contact',
    ['title' => 'Contact']
)->name('front.contact');

// Contact Form
Route::post(
    'contact',
    ContactFormController::class
)->name('front.contact-form');

// Singup For Newsletter
Route::post(
    'register-for-newsletter',
    [NewsletterController::class, 'register']
)->name('register-for-newsletter');