<?php

use App\Http\Controllers\AnalisaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\UkmAssetController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\UkmDanaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\AnalisaChatbotController;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dasbor', [DasborController::class, 'index'])->name('dasbor');
    // Route for getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');
    Route::get('/total-ukm', [DasborController::class, 'getTotalUkm'])->name('total_ukm');
    Route::get('/total-ukm-aktif', [DasborController::class, 'getTotalUkmAktif'])->name('total_ukm_aktif');
    Route::get('/total-ukm-tidak-aktif', [DasborController::class, 'getTotalUkmTidakAktif'])->name('total_ukm_tidak_aktif');
    Route::get('/ukm-status', [DasborController::class, 'getTotalUkmStatus'])->name('ukm_status');
    Route::get('/total-anggota-per-angkatan', [AnggotaController::class, 'getTotalAnggotaPerAngkatan'])->name('total_anggota_per_angkatan');
    Route::get('/popular-activities', [DasborController::class, 'getPopularActivities'])->name('popular_activities');
    Route::get('/skala-kegiatan-distribution', [KegiatanController::class, 'getSkalaKegiatanDistribution'])->name('skala_kegiatan_distribution');
    Route::get('/ukm-list', [UkmController::class, 'list'])->name('ukm-list');
    Route::get('/ukm-dasbor/{id?}', [UkmController::class, 'dasbor'])->name('ukm-dasbor');
    Route::get('/ukm-list-json', [UkmController::class, 'getUkmListJson'])->name('ukm-list-json');
    Route::get('/ukm-get-kegiatan-periode-ini/{id}', [UkmController::class, 'getKegiatanPeriodeIni'])->name('ukm-get-kegiatan-periode-ini');
    Route::get('/ukm-get-kegiatan-periode-ini-json/{id}', [UkmController::class, 'getKegiatanPeriodeIniJson'])->name('ukm-get-kegiatan-periode-ini-json');

    // Anggota
    Route::get('/ukm-anggota/{id}', [UkmController::class, 'anggotaPage'])->name('ukm-anggota');
    Route::get('/ukm-get-ukm-anggota-json/{id}', [UkmController::class, 'getUkmAnggotaJson'])->name('ukm-get-ukm-anggota-json');
    // Route::get('/ukm-get-ukm-anggota-aktif/{id}', [UkmController::class, 'getUkmAnggotaAktif'])->name('ukm-get-ukm-anggota-aktif');

    // Kegiatan
    Route::get('/ukm-get-ukm-detail/{id}', [UkmController::class, 'getUkmDetail'])->name('ukm-get-ukm-detail');
    Route::get('/ukm-get-ukm-detail-json/{id}', [UkmController::class, 'getUkmDetailJson'])->name('ukm-get-ukm-detail-json');

    // Asset
    Route::get('/ukm-aset/{id}', [UkmAssetController::class, 'assetPage'])->name('ukm-aset');
    Route::get('/ukm-get-ukm-aset-json/{id}', [UkmAssetController::class, 'getUkmAssetJson'])->name('ukm-get-ukm-aset-json');

    // Dana
    Route::get('/ukm-dana/{id}', [UkmDanaController::class, 'index'])->name('ukm-dana');
    Route::get('/ukm-get-ukm-dana-json/{id}', [UkmDanaController::class, 'getUkmDanaJson'])->name('ukm-get-ukm-dana-json');

    // Chatbot
    Route::get('/analisa-chatbot', [AnalisaChatbotController::class, 'index'])->name('analisa-chatbot');
    Route::post('/analisa-chatbot-chat', [AnalisaChatbotController::class, 'chat'])->name('chatbot.chat');


    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');

    Route::get('/kegiatan', [KegiatanController::class, 'kegiatan'])->name('kegiatan');
    Route::get('/kegiatan/partisipan', [KegiatanController::class, 'partisipan'])->name('partisipan');
    Route::get('/keuangan', [KeuanganController::class, 'keuangan'])->name('keuangan');
    Route::get('/keuangan/dana', [KeuanganController::class, 'dana'])->name('dana');

    Route::fallback(function () {
        return view('pages/utility/404');
    });
});

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dasbor');
    } else {
        return redirect()->route('login');
    }
})->name('home');