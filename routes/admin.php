<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware('verified')->group(function () {
    Route::get('/', fn() => view('dashboard'))->name('dashboard');

    Route::get('/articulo/create', [PostController::class, 'create'])
        ->name('articulo.create');

    Route::post('/articulos', [PostController::class, 'store'])
        ->name('articulos.store');

    Route::get('/articulos/{post}/edit', [PostController::class, 'edit'])
        ->name('articulos.edit');

    Route::put('/articulos/{post}', [PostController::class, 'update'])
        ->name('articulos.update');

    Route::delete('/articulos/{post}', [PostController::class, 'destroy'])
        ->name('articulos.destroy');
});
