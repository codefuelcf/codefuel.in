<?php

use Illuminate\Support\Facades\Route;

Route::view(
    '/about',
    'front.about',
    ['title' => 'About']
);