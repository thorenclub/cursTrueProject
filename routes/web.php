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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('home');
});

Route::get('/developers', function () {
    return view('developers');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/admin-profiles', function () {
    return view('profiles');
});

//Route::get('/profile', function () {
//    return view('profile');
//});

Route::get('/deleteProject', function () {
    return view('deleteProject');
});

Route::get('/project', function () {
    return view('project');
});

Route::any('/create-project', [ProjectController::class, 'create'])->name('create-project');

Route::get('/profile', [ProfileController::class, 'view'])->name('profile-view');


Route::any('/register', [UserController::class, 'register'])->name('register');
Route::any('/login', [UserController::class, 'login'])->name('login');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

