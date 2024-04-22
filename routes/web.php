<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'user-access:mahasiswa'])->group(function () {
Route::get('/home', [HomeController::class, 'index'])->name('home');
});
/*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:super admin'])->group(function () {
Route::get('/super-admin/home', [HomeController::class,'superAdminHome'])->name('superadmin.home');
});
/*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
Route::get('/admin/home', [HomeController::class,'adminHome'])->name('admin.home');
});
/*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:dosen'])->group(function () {
Route::get('/dosen/home', [HomeController::class,'dosenHome'])->name('dosen.home');
});
/*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:tendik'])->group(function () {
Route::get('/tendik/home', [HomeController::class,'tendikHome'])->name('tendik.home');
});
    /*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:admin akademik'])->group(function () {
Route::get('/admin-akademik/home', [HomeController::class,'adminAkademikHome'])->name('adminakademik.home');
});
/*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:admin keuangan'])->group(function () {
Route::get('/admin-keuangan/home', [HomeController::class,'adminKeuanganHome'])->name('adminkeuangan.home');
});
/*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:direktur'])->group(function () {
Route::get('/direktur/home', [HomeController::class,'direkturHome'])->name('direktur.home');
});
/*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:wakil direktur1'])->group(function () {
Route::get('/wakil-direktur1/home', [HomeController::class,'wakilDirektur1Home'])->name('wakildirektur1.home');
});
/*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:wakil direktur2'])->group(function () {
Route::get('/wakil-direktur2/home', [HomeController::class,'wakilDirektur2Home'])->name('wakildirektur2.home');
});
/*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:wakil direktur3'])->group(function () {
Route::get('/wakil-direktur3/home', [HomeController::class,'wakilDirektur3Home'])->name('wakildirektur3.home');
});
/*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:admin lppm'])->group(function () {
Route::get('/admin-lppm/home', [HomeController::class,'adminLppmHome'])->name('adminlppm.home');
});
/*--------------------------------------------------------------------------------------
All Admin Routes List----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:admin sdm'])->group(function () {
Route::get('/admin-sdm/home', [HomeController::class,'adminSdmHome'])->name('adminsdm.home');
});