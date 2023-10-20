<?php

use App\Http\Controllers\Base\BaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;

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


Route::get('/', [WebController::class, 'beranda']);
Route::get('tentang', [WebController::class, 'tentang']);
Route::get('visi-misi', [WebController::class, 'visimisi']);
Route::get('maklumat', [WebController::class, 'maklumat']);
Route::get('selayang-pandang', [WebController::class, 'selayangpandang']);
Route::get('struktur-organisasi', [WebController::class, 'strukturorganisasi']);
Route::get('pegawai-opd', [WebController::class, 'pegawaiopd']);
Route::get('detail-berita/{slug}', [WebController::class, 'detailberita']);
