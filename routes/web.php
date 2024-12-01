<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Pages Routes

Route::get('/', [PageController::class, 'homePage'])->name('home');
Route::get('/about', [PageController::class, 'aboutPage'])->name('about');
Route::get('/admin', [PageController::class, 'adminPage'])->name('admin');
Route::get('/employer', [PageController::class, 'employerPage'])->name('employers');
Route::get('/findjob', [PageController::class, 'findJobPage'])->name('findjob');
Route::get('/about', [PageController::class, 'aboutusPage'])->name('about');
Route::get('/contact', [PageController::class, 'contactusPage'])->name('contact');


// Login page routes

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

