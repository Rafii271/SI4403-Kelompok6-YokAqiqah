<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

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

// ========================== AUTH ==========================
Route::post('/login', [authController::class, 'LoginUser'])->name('login.post');
Route::post('/register', [authController::class, 'register'])->name('register.post');
Route::post('/logout', [authController::class, 'logoutUser']);
// ========================== AUTH ==========================

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profileview', function () {
    return view('profileview');
});

Route::get('/profileupdate', function () {
    return view('profileupdate');
});

Route::get('/product', function () {
    return view('product');
});