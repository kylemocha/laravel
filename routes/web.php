<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\Auth\Forgot_PasswordController;
use App\Http\Controllers\admin_conController;
use App\Http\Controllers\JournalViewController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\ApptController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\MessagesController;


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

Route::get('wmhd', function () {
    return view('wmhd');
});

Route::get('covid', function () {
    return view('covid');
});

Route::get('mental', function () {
    return view('mental');
});

Route::get('center', function () {
    return view('center');
});
//insert journal
Route::get('/insert','App\Http\Controllers\JournalController@insertform');
Route::post('/create','JournalController@insert');

//retrieve journal data
Route::get('/home_user', 'JournalViewController@index');

//home-user features
Route::get('/insert',[ApptController::class, 'showForm']);
Route::post('/post',[ApptController::class, 'storeForm']);

//therapist and calendar
Route::get('/therapist','TherapistController@index');

Route::get('/insert',[TherapistController::class, 'seeForm']);
Route::post('/createform',[TherapistController::class, 'insertSchedule']); 

Route::get('/insert',[TherapistController::class, 'seeNotif']);
Route::post('/post',[TherapistController::class, 'storeNotif']);


Route::get('/approve/{id}', 'TherapistController@approve')->name('admin.approve');
Route::get('/decline/{id}', 'TherapistController@decline')->name('admin.decline');


//therapist calendar
//Route::get('/',[TherapistController::class, 'calendar']);
//Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);

//Route::resource('tasks', 'TasksController');


Route::get('edit-therapist/{id}', [TherapistController::class, 'edit']);
Route::put('update-therapist/{id}', [TherapistController::class, 'update']);

//update and delete home_user
Route::get('edit/{id}', [JournalViewController::class, 'showData']);
Route::post('edit', [JournalViewController::class, 'update']);
Route::get('delete/{id}', [JournalViewController::class, 'delete']);

Route::get('view/{id}', [JournalViewController::class, 'showJournal']);
Route::get('delete_notif/{id}', [JournalViewController::class, 'deleteNotif']);

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
Route::get('registration', [CustomAuthController::class, 'registration']);
Route::post('post-registration', [CustomAuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('logout', [CustomAuthController::class, 'logout']);

//for admin 
Auth::routes();
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('therapist/home', [HomeController::class, 'therapistHome'])->name('therapist.home')->middleware('is_admin');

Route::get('edit-admin/{id}', [admin_conController::class, 'showUser']);
Route::put('update-admin/{id}', [admin_conController::class, 'updateUser']);
Route::get('delete-admin/{id}', [admin_conController::class, 'deleteUser']);

Route::get('add-user/{id}', [admin_conController::class, 'showAddUser']);
Route::put('add_user/{id}', [admin_conController::class, 'addUser']);

//retrieve data admin
Route::get('/admin','admin_conController@index');

Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'JournalViewController@message']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'JournalViewController@create']); //get
    Route::post('/', ['as' => 'messages.store', 'uses' => 'JournalViewController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'JournalViewController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'JournalViewController@updateMessage']);
});




