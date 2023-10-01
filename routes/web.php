<?php

use App\Http\Controllers\FaceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('login/facebook', [App\Http\Controllers\FaceController::class, 'login'])->name('login.facebook');
Route::get('facebook/auth/callback', [App\Http\Controllers\FaceController::class, 'callback']);
Route::get('/login-google', [App\Http\Controllers\GoogleController::class, 'login'])->name('login.google');
Route::get('/google-callback', [App\Http\Controllers\GoogleController::class, 'callback']);

