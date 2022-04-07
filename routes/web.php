<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::controller(AuthController::class)->name('auth.')->prefix('auth')->group(function () {
    Route::get('login', fn() => view('auth.login'))->name('login');
    Route::get('register', fn() => view('auth.register'))->name('register');
    Route::get('logout', 'logout')->name('logout');

    Route::post('login', 'login')->name('loginAction');
    Route::post('register', 'register')->name('registerAction');
});
