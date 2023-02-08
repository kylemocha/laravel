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
    //return view('layout/login');
//});
//Route::get('register', function () {
    //return view('layout/register');
//});
Route::get('home_user', function () {
    return view('home_user');
});


//Route::get('main_home', [CustomAuthController::class, 'main_home']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [CustomAuthController::class, 'register'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


