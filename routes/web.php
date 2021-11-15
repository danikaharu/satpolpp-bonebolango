<?php


use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\Complaints\ComplaintController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\RegulationController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\GalleryController;
use App\Http\Controllers\User\NewsController as UserNewsController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use App\Http\Controllers\User\RegulationController as UserRegulationController;
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

    Route::get('/profile/{slug}', [ProfileController::class, 'show'])->name('admin.profile.show');
    Route::put('/profile/{profile}', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::get('/profile/{profile}/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');

    // profile Profile instansi
    // Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    // Route::get('profile/{profile}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::put('profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');

    // // profile Visi Misi
    // Route::get('visionmission', [ProfileController::class, 'visionmission'])->name('visionmission.index');
    // Route::get('visionmission/{profile}/edit', [ProfileController::class, 'editvisionmission'])->name('visionmission.edit');
    // Route::put('visionmission/{profile}', [ProfileController::class, 'updatevisionmission'])->name('visionmission.update');

    // // profile tupoksi
    // Route::get('tupoksi', [ProfileController::class, 'tupoksi'])->name('tupoksi.index');
    // Route::get('tupoksi/{profile}/edit', [ProfileController::class, 'edittupoksi'])->name('tupoksi.edit');
    // Route::put('tupoksi/{profile}', [ProfileController::class, 'updatetupoksi'])->name('tupoksi.update');

    // // profile unit dan jabatan
    // Route::get('unitjabatan', [ProfileController::class, 'unitjabatan'])->name('unitjabatan.index');
    // Route::get('unitjabatan/{profile}/edit', [ProfileController::class, 'editunitjabatan'])->name('unitjabatan.edit');
    // Route::put('unitjabatan/{profile}', [ProfileController::class, 'updateunitjabatan'])->name('unitjabatan.update');

    // // profile struktur
    // Route::get('struktur', [ProfileController::class, 'struktur'])->name('struktur.index');
    // Route::get('struktur/{profile}/edit', [ProfileController::class, 'editstruktur'])->name('struktur.edit');
    // Route::put('struktur/{profile}', [ProfileController::class, 'updatestruktur'])->name('struktur.update');

    // fix crud regulasi
    Route::resource('regulation', RegulationController::class);

    // fix crud Berita
    Route::resource('news', NewsController::class);

    // fix crud Galeri Kegiatan
    Route::resource('galery', GaleryController::class);
});


// Route User

Route::get('/', [UserDashboardController::class, 'index'])->name('home');

Route::get('/berita', [UserNewsController::class, 'index'])->name('berita');

Route::get('/berita/{slug}', [UserNewsController::class, 'show'])->name('berita.detail');

Route::get('/profil/{profile}', [UserProfileController::class, 'index'])->name('profil');

Route::get('/regulasi', [UserRegulationController::class, 'index'])->name('regulasi');

// ROUTE DOWNLOAD PDF 
Route::get('/download/{slug}', [UserRegulationController::class, 'download']);

Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri');

Route::view('/pengaduan', 'layouts.user.complaint')->name('pengaduan');
