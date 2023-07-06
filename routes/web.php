<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\KeuanganController;

use App\Http\Controllers\KegiatanController;
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
// Route::get('/', function () 
// {
//     DebugBar::error('Error!');
//     return view('welcome');
// }   

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])
    ->name('json_data_feed');
    Route::get('/total-ukm', [DasborController::class, 'getTotalUkm'])->name('total_ukm');
    Route::get('/total-ukm-aktif', [DasborController::class, 'getTotalUkmAktif'])->name('total_ukm_aktif');
    Route::get('/total-ukm-tidak-aktif', [DasborController::class, 'getTotalUkmTidakAktif'])->name('total_ukm_tidak_aktif');
    Route::get('/ukm-status', [DasborController::class, 'getTotalUkmStatus'])->name('ukm_status');
    Route::get('/total-anggota-per-angkatan', [AnggotaController::class, 'getTotalAnggotaPerAngkatan'])->name('total_anggota_per_angkatan');; 
    Route::get('/popular-activities', [DasborController::class, 'getPopularActivities'])->name('popular_activities');
    Route::get('/skala-kegiatan-distribution', [KegiatanController::class, 'getSkalaKegiatanDistribution'])->name('skala_kegiatan_distribution');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');
    Route::get('/assets', [AssetsController::class, 'index'])->name('assets');
    Route::get('/kegiatan', [KegiatanController::class, 'kegiatan'])->name('kegiatan');
    Route::get('/kegiatan/partisipan', [KegiatanController::class, 'partisipan'])->name('partisipan');
    Route::get('/keuangan', [KeuanganController::class, 'keuangan'])->name('keuangan');
    Route::get('/keuangan/dana', [KeuanganController::class, 'dana'])->name('dana');
    Route::get('/dasbor', [DasborController::class, 'index'])->name('dasbor');
    

    Route::fallback(function() {
        return view('pages/utility/404');
    });
});