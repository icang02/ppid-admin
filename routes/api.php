<?php

use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\FormulirController;
use App\Http\Controllers\Api\InformasiPublikController;
use App\Http\Controllers\Api\LandingController;
use App\Http\Controllers\Api\LaporanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API HALAMAN LANDING
Route::get('/landing/index', [LandingController::class, 'index']);
Route::get('/landing/ppid', [LandingController::class, 'ppid']);
Route::get('/landing/jenis-informasi', [LandingController::class, 'jenisInformasi']);
Route::get('/landing/tata-cara', [LandingController::class, 'tataCara']);
Route::get('/landing/formulir', [LandingController::class, 'formulir']);
Route::get('/landing/slogan', [LandingController::class, 'slogan']);
Route::get('/landing/footer', [LandingController::class, 'footer']);
Route::get('/landing/berita', [LandingController::class, 'berita']);
Route::get('/card-news', [LandingController::class, 'berita']);

// API HALAMAN TENTANG
Route::get('/profil', [LandingController::class, 'profil']);
Route::get('/visi-misi', [LandingController::class, 'visiMisi']);
Route::get('/tugas-fungsi', [LandingController::class, 'tugasFungsi']);
Route::get('/struktur-ppid', [LandingController::class, 'strukturPPID']);
Route::get('/regulasi', [LandingController::class, 'regulasi']);

// API HALAMAN FORMULIR
Route::get('/formulir/permohonan-informasi-publik', [FormulirController::class, 'permohonan']);
Route::get('/formulir/keberatan-layanan-informasi-publik', [FormulirController::class, 'keberatan']);
Route::get('/formulir/penyelesaian-sengketa-informasi-publik', [FormulirController::class, 'sengketa']);

// API HALAMAN INFORMASI PUBLIK
Route::get('/informasi-publik/berkala', [InformasiPublikController::class, 'berkala']);
Route::get('/informasi-publik/setiap-saat', [InformasiPublikController::class, 'setiapSaat']);
Route::get('/informasi-publik/dikecualikan', [InformasiPublikController::class, 'dikecualikan']);
// LIST INFORMASI PUBLIK
Route::get('/list/informasi-publik/berkala', [InformasiPublikController::class, 'listBerkala']);
Route::get('/list/informasi-publik/setiap-saat', [InformasiPublikController::class, 'listSetiapSaat']);

// HALAMAN BERITA
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'detail']);
Route::get('/card-news/not/{slug}', [LandingController::class, 'cardNews']);
// SEARCH BERITA
Route::get('/berita/search/{keyword}', [BeritaController::class, 'search']);
Route::get('/berita/search/info-serta-merta/{keyword}', [BeritaController::class, 'search']);
// INFO SERTA MERTA
Route::get('/informasi-publik/serta-merta', [BeritaController::class, 'index']);

// LAPORAN LAYANAN INFO PUBLIK
Route::get('/laporan/layanan-informasi-publik', [LaporanController::class, 'laporanLayanan']);
// LAPORAN AKSES INFO PUBLIK
Route::get('/laporan/akses-informasi-publik/{tahun}', [LaporanController::class, 'laporanAkses']);
