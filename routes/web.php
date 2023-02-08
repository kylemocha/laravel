<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CustomAuthController;


Route::view('/', 'welcome'); 
//Route::view('/main_home', 'main_home'); 
//Route::view('/login', 'login'); 
//Route::view('/register', 'register'); 
//Route::view('/home_user', 'home_user'); 

Route::get('main_home', function () {
    return view('layout/main_home');
});
Route::get('login', function () {
    return view('layout/login');
});
Route::get('register', function () {
    return view('layout/register');
});
Route::get('home_user', function () {
    return view('home_user');
});




