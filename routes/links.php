<?php

use Illuminate\Support\Facades\Route;

// This file is for setting up the routes for the links, i.e. 301 redirect

Route::get('/linkedin', fn() => redirect('https://www.linkedin.com/in/Ferchupessoadev/'))
    ->name('linkedin');

Route::get('/github', fn() => redirect('https://github.com/Ferchupessoadev'))
    ->name('github');

Route::get('/mastodon', fn() => redirect('https://mastodon.social/@ferchodev'))
    ->name('mastodon');
