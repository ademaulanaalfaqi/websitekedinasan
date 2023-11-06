<?php

use App\Http\Controllers\Web\BerandaController;
use App\Http\Controllers\Web\FaqController;
use App\Http\Controllers\Web\InformasiController;
use App\Http\Controllers\Web\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PublikasiController;
use App\Http\Controllers\Web\RuangPublikController;
use App\Http\Controllers\Web\GaleriController;
use App\Http\Controllers\Web\KontakController;
use App\Http\Controllers\Web\PengaduanController;
use App\Http\Controllers\Web\PPIDController;

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
Route::get('artikel', [PublikasiController::class, 'artikel']);
Route::get('artikel/detail-artikel/{slug}', [PublikasiController::class, 'detailArtikel']);
Route::get('dokumen-publik', [PublikasiController::class, 'dokumenPublik']);
Route::get('dokumen-publik/detail-dokumen/{slug}', [PublikasiController::class, 'detaildokumen']);
Route::get('dokumen-kinerja', [PublikasiController::class, 'dokumenKinerja']);
Route::get('dokumen-kinerja/detail-dokumen/{slug}', [PublikasiController::class, 'detaildokumen']);
Route::get('standar-pelayanan', [PublikasiController::class, 'standarpelayanan']);
Route::get('standar-pelayanan/detail-dokumen/{slug}', [PublikasiController::class, 'detaildokumen']);

// ruang publik
Route::get('laporan-skm', [RuangPublikController::class, 'laporanskm']);
Route::get('laporan-skm/detail-dokumen/{slug}', [PublikasiController::class, 'detaildokumen']);
Route::get('laporan-tindak-lanjut-skm', [RuangPublikController::class, 'laporantindaklanjut']);
Route::get('laporan-tindak-lanjut-skm/detail-dokumen/{slug}', [PublikasiController::class, 'detaildokumen']);

// ppid
Route::get('ppid', [PPIDController::class, 'ppid']);

// informasi
Route::get('informasi', [InformasiController::class, 'informasi']);

// galeri
Route::get('foto', [GaleriController::class, 'foto']);
Route::get('vidio', [GaleriController::class, 'vidio']);

// kontak
Route::get('kontak', [KontakController::class, 'kontak']);

// faq
Route::get('faq', [FaqController::class, 'faq']);

// pengaduan
Route::get('informasi-pengaduan', [PengaduanController::class, 'informasipengaduan']);

