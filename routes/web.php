<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/sobremi', fn() => view('aboutme'))
    ->name('aboutme');

Route::get('/articulos', [PostController::class, 'index'])
    ->name('articulos.index');

Route::get('/articulos/{post}', [PostController::class, 'show'])
    ->name('articulos.show');

Route::get('/contacto', [HomeController::class, 'create'])
    ->name('contact');

Route::post('/contacto', [HomeController::class, 'store'])
    ->middleware('throttle:3,1')
    ->name('contact.store');
