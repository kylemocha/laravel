<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\JournalViewController;


Route::view('/', 'welcome'); 
//Route::view('/main_home', 'main_home'); 
//Route::view('/login', 'login'); 
//Route::view('/register', 'register'); 
//Route::view('/home_user', 'home_user'); 

Route::get('main_home', function () {
    return view('main_home');
});
//Route::get('login', function () {
    //return view('auth/login');
//});
//Route::get('register', function () {
    //return view('auth/registration');
//});
Route::get('home_user', function () {
    return view('home_user');
});


Route::get('/insert','App\Http\Controllers\JournalController@insertform');
Route::post('/create','JournalController@insert');
//retrive data
Route::get('/','JournalViewController@index');

//Route::get('/insert','App\Http\Controllers\RatingsController@insertForm');
//Route::post('/create1','JournalController@insert');


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('contact', [ContactUsFormController::class, 'createForm']);
Route::post('contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('post-login', [CustomAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');
Route::post('post-registration', [CustomAuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');




