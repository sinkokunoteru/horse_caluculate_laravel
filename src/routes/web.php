<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'dispHome'])->name('home');

Route::get('register', [RegisterController::class, 'dispRegister'])->name('register');

Route::post('register', [RegisterController::class, 'createUser']);

Route::post('register_check', [RegisterController::class, 'checkRegister'])->name('register_check');

Route::get('login', [LoginController::class, 'dispLogin'])->name('login');

Route::post('login', [LoginController::class, 'authenticate']);




