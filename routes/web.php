<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/employees', function () {
    return view('employees');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::any('/register', [UserController::class, 'register'])->name('register');
Route::any('/login', [UserController::class, 'login'])->name('login');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

