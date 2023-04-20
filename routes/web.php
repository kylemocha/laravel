<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\Auth\Forgot_PasswordController;
use App\Http\Controllers\admin_conController;
use App\Http\Controllers\JournalViewController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\ApptController;
use App\Http\Controllers\CalenderController;


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
Route::get('profile', function () {
    return view('profile');
});
Route::get('therapist', function () {
    return view('therapist');
});

//insert journal
Route::get('/insert','App\Http\Controllers\JournalController@insertform');
Route::post('/create','JournalController@insert');

//retrieve journal data
Route::get('/home_user', 'JournalViewController@index');
//retrieve data admin
Route::get('/admin','admin_conController@index');

//home-user features
Route::get('/insert',[ApptController::class, 'showForm']);
Route::post('/post',[ApptController::class, 'storeForm']);

//therapist
Route::get('/therapist','TherapistController@index');

//therapist calendar
Route::get('calendar-event', [CalenderController::class, 'index']);
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);

Route::get('edit-therapist/{id}', [TherapistController::class, 'edit']);
Route::put('update-therapist/{id}', [TherapistController::class, 'update']);

//update and delete home_user
Route::get('edit/{id}', [JournalViewController::class, 'showData']);
Route::post('edit', [JournalViewController::class, 'update']);
Route::get('delete/{id}', [JournalViewController::class, 'delete']);

//Route::get('home_user', [JournalViewController::class, 'viewTherapist']);

//forget password features
Route::get('forget-password', [Forgot_PasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [Forgot_PasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [Forgot_PasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [Forgot_PasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

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

//for admin 
Auth::routes();
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('therapist/home', [HomeController::class, 'therapistHome'])->name('therapist.home')->middleware('is_admin');

Route::get('edit-admin/{id}', [admin_conController::class, 'showUser']);
Route::put('update-admin/{id}', [admin_conController::class, 'updateUser']);
Route::get('delete-admin/{id}', [admin_conController::class, 'deleteUser']);

