<?php

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

Route::prefix('admin')->group(function () {
    Route::view('dashboard', 'layouts.admin.dashboard')->name('admin.dashboard');
});

Route::view('/', 'layouts.user.dashboard')->name('home');
Route::view('/article', 'layouts.user.article')->name('article');
