<?php

use Illuminate\Support\Facades\Route;

// Home
// About
Route::view(
    '/',
    'front.home',
    ['title' => 'Home']
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