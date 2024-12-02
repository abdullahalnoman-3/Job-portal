<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\TokenVerificationMiddleware;

// Authentication API
Route::post('register-api', [AuthController::class, 'register']);
Route::post('login-api', [AuthController::class, 'login']);
Route::post('send-otp-api', [AuthController::class, 'sendOTPCode']);
Route::post('verify-otp-api', [AuthController::class, 'verifyOTP']);
Route::post('reset-password-api', [AuthController::class, 'resetPassword'])
    ->middleware(TokenVerificationMiddleware::class);
