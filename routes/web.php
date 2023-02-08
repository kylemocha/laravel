<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;


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

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('post-login', [CustomAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');
Route::post('post-registration', [CustomAuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');




