<?php

use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: 'up',
        then: function () {
            Route::middleware('web')
                ->group(__DIR__ . '/../routes/auth.php');

            Route::middleware(['web', 'auth'])
                ->prefix('admin')
                ->name('admin.')
                ->group(__DIR__ . '/../routes/admin.php');

            Route::name('links.')
                ->group(__DIR__ . '/../routes/links.php');
        },
    )
    ->withMiddleware(function (Middleware $middleware) {})
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();
