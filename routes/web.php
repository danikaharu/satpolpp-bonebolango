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
Route::get('/', function() {
    return view('layouts.user.dashboard');
})->name('home');

Route::prefix('pengaduan')->group(function () {
    Route::get('/', [ComplaintController::class, 'index'])->name('pengaduan');
});

Route::get('/regulasi', [RegulationController::class, 'index'])->name('regulasi');
Route::get('/berita', [NewsController::class, 'index'])->name('berita');
Route::get('/galeri', [GaleryController::class, 'index'])->name('galeri');

Route::prefix('admin')->group(function () {
    // disable
    // Route::view('dashboard', 'layouts.admin.dashboard')->name('admin.dashboard');

    // update
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    
});

// Route::view('/', 'layouts.user.dashboard');
