<?php


use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\Complaints\ComplaintController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\RegulationController;
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

// Route Admin

Route::prefix('admin')->group(function () {
    Route::post('/logout', [LogoutController::class, 'store'])->name('admin.logout');
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::prefix('pengaduan')->group(function () {
        Route::get('/', [ComplaintController::class, 'index'])->name('admin.pengaduan');
    });

    Route::get('/regulasi', [RegulationController::class, 'index'])->name('admin.regulasi');
    Route::get('/berita', [NewsController::class, 'index'])->name('admin.berita');
    Route::get('/galeri', [GaleryController::class, 'index'])->name('admin.galeri');
});


// Route User

Route::get('/', function () {
    return view('layouts.user.dashboard');
})->name('home');

Route::view('/berita', 'layouts.user.news')->name('berita');

Route::view('/profil', 'layouts.user.profile')->name('profil');

Route::view('/regulasi', 'layouts.user.regulation')->name('regulasi');

Route::view('/galeri', 'layouts.user.gallery')->name('galeri');

Route::view('/pengaduan', 'layouts.user.complaint')->name('pengaduan');
