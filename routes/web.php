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
