<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/login',
    [MainController::class, 'login_function']
)->name('login');

Route::get(
    '/register',
    [MainController::class, 'registration_form']
)->name('registration');

Route::post(
    '/register',
    [MainController::class, 'store_user']
)->name('register_user');

Route::post(
    '/login',
    [MainController::class, 'signin']
)->name('signin');

Route::get(
    '/home_page',
    [MainController::class, 'home_page']
)->middleware('auth')->name('home_page');

Route::get(
    '/logout',
    [MainController::class, 'logout_page']
)->name('logout');