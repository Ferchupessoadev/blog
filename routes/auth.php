<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    // Logout
    Route::get('/logout', [LoginController::class, 'destroy'])
        ->name('logout');

    // Profile dashboard
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    // Profile destroy
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Email verification endpoints
    Route::get('verify-email', fn() => view('auth.verify-email', ['verified' => auth()->user()->hasVerifiedEmail()]))->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect(route('admin.dashboard'));
    })->middleware('signed')->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        if ($request->user()->hasVerifiedEmail())
            return response()->json(['status' => 'Ya verificado']);

        $request->user()->sendEmailVerificationNotification();

        return response()->json(['status' => 'Enlace de verificación enviado']);
    })->middleware('throttle:1,1')->name('verification.send');
});
