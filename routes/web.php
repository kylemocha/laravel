<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\JournalViewController;
use App\Models\JournalView;

Auth::routes();

Route::view('/', 'welcome'); 

Route::get('admin', function () {
    return view('admin');
});

Route::get('main_home', function () {
    return view('main_home');
});
Route::get('home_user', function () {
    return view('home_user');
});

//insert journal
Route::get('/insert','App\Http\Controllers\JournalController@insertform');
Route::post('/create','JournalController@insert');

//retrive journal data
Route::get('/home_user', 'JournalViewController@index');
//update and delete
Route::get('edit/{id}', [JournalViewController::class, 'showData']);
Route::post('edit', [JournalViewController::class, 'update']);
Route::get('delete/{id}', [JournalViewController::class, 'delete']);

//forget password features
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

//contact form
Route::get('contact', [ContactUsFormController::class, 'createForm']);
Route::post('contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

//login and registration
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('post-login', [CustomAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');
Route::post('post-registration', [CustomAuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

//for admin unta :(
//Route::get('/admin', [App\Http\Controllers\CustomAuthController::class, 'adminHome'])->name('admin')->middleware('is_admin');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
