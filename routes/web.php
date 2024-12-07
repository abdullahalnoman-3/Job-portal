<?php

use App\Http\Controllers\admin_dropdown_input;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Middleware\TokenVerificationMiddleware;

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



Route::get('/employer2', [PageController::class, 'employer2Page'])->name('employers2');
Route::get('/user', [PageController::class, 'userPage'])->name('user');



// Authentication Page Routes

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::get('/send-otp', [AuthController::class, 'sendOtpPage'])->name('send-otp');
Route::get('/verify-otp', [AuthController::class, 'verifyOtpPage'])->name('verify-otp');
Route::get('/reset-password', [AuthController::class, 'resetPasswordPage'])->name('reset-password')
    ->middleware(TokenVerificationMiddleware::class);



Route::middleware(TokenVerificationMiddleware::class)->group(function () {

    // Protected APIs

    Route::get('/dashboard', [AuthController::class, 'dashboardPage']);

    // Admin APIs
    Route::middleware(['admin'])->group(function () {

        // job lavel

        Route::get('/manage_job_lavel', [admin_dropdown_input::class, 'manage_job_lavel'])->name('manage_job_lavel');
        Route::post('/job_level_store', [admin_dropdown_input::class, 'job_level_store'])->name('job_level_store');

        Route::get('/manage_job_role', [admin_dropdown_input::class, 'manage_job_role'])->name('manage_job_role');
        Route::post('/job_role_store', [admin_dropdown_input::class, 'job_role_store'])->name('job_role_store');

        Route::get('/manage_country', [admin_dropdown_input::class, 'manage_country'])->name('manage_country');
        Route::post('/country_name_store', [admin_dropdown_input::class, 'country_name_store'])->name('country_name_store');


        Route::get('/manage_city_name', [admin_dropdown_input::class, 'manage_city_name'])->name('manage_city_name');
        Route::post('/city_name_store', [admin_dropdown_input::class, 'city_name_store'])->name('city_name_store');


    });



    // Employer APIs
    Route::middleware(['employer'])->group(function () {});



    // User APIs
    Route::middleware(['user'])->group(function () {});
});
