<?php

use App\Http\Controllers\User\Auth\ResetPasswordController;
use App\Http\Controllers\User\Auth\ForgotPasswordController;
use App\Http\Controllers\User\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('user.register');

Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->middleware('guest')
    ->name('login.attempt');


Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('user.password.email');


Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('user.password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');


Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('user.logout');

Route::get('dashboard',function(){
    return view('user.dashboard.index');
})->name('dashboard');
