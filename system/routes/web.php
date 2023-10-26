<?php

use App\Http\Controllers\Web\BerandaController;
use App\Http\Controllers\Web\InformasiController;
use App\Http\Controllers\Web\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PublikasiController;
use App\Http\Controllers\Web\RuangPublikController;

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

// beranda
Route::get('/', [BerandaController::class, 'beranda']);

// profil
Route::get('tentang', [ProfilController::class, 'tentang']);
Route::get('visi-misi', [ProfilController::class, 'visimisi']);
Route::get('maklumat', [ProfilController::class, 'maklumat']);
Route::get('selayang-pandang', [ProfilController::class, 'selayangpandang']);
Route::get('struktur-organisasi', [ProfilController::class, 'strukturorganisasi']);
Route::get('pegawai-opd', [ProfilController::class, 'pegawaiopd']);

// publikasi
Route::get('berita', [PublikasiController::class, 'berita']);
Route::get('detail-berita/{slug}', [PublikasiController::class, 'detailberita']);
Route::get('standar-pelayanan', [PublikasiController::class, 'standarpelayanan']);

// ruang publik
Route::get('laporan-skm', [RuangPublikController::class, 'laporanskm']);
Route::get('laporan-tindak-lanjut-skm', [RuangPublikController::class, 'laporantindaklanjut']);
Route::get('dokumen-publik/{slug}', [RuangPublikController::class, 'dokumenpublik']);

// informasi
Route::get('informasi', [InformasiController::class, 'informasi']);
