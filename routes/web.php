<?php

use App\Http\Controllers\admin_dropdown_input;
use App\Http\Controllers\ApplyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\brows_company;
use App\Http\Controllers\FindJobController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\save_jobs;
use App\Http\Controllers\user_apply_job;
use App\Http\Controllers\user_save_job;
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


Route::get('/findjob', [FindJobController::class, 'jobs_data'])->name('findjob');
Route::post('/job-view-details-page', [JobController::class, 'jobViewDetails'])->name('jobViewDetails');


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

        Route::get('/manage_job_type', [admin_dropdown_input::class, 'manage_job_type'])->name('manage_job_type');
        Route::post('/job_type_store', [admin_dropdown_input::class, 'job_type_store'])->name('job_type_store');
       
        Route::get('/manage_job_function', [admin_dropdown_input::class, 'manage_job_function'])->name('manage_job_function');
        Route::post('/job_function_store', [admin_dropdown_input::class, 'job_function_store'])->name('job_function_store');


    });



    // Employer APIs
    Route::middleware(['employer'])->group(function () {


        Route::get('/job_post', [JobController::class, 'job_post'])->name('job_post');
        Route::post('/job_post', [JobController::class, 'job_post_store'])->name('job_post_store');


    });



    // User APIs
    Route::middleware(['user'])->group(function () {


        // Route::get('/findjob', [FindJobController::class, 'jobs_data'])->name('findjob');
        Route::get('/user_save_job', [user_save_job::class, 'user_save_job'])->name('user_save_job');
        Route::get('/user_apply_job', [user_apply_job::class, 'user_apply_job'])->name('user_apply_job');
        Route::get('/brows_company', [brows_company::class, 'brows_company'])->name('brows_company');

        Route::post('/apply_job_form', [ApplyController::class, 'applyForm'])->name('applyForm');  
        Route::post('/apply_job', [ApplyController::class, 'store'])->name('apply_job');
        Route::post('/save_jobs', [save_jobs::class, 'saveJob'])->name('save_jobs');


    






    });
});
