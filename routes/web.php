<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

// ROUTE SYMLINK
Route::get('/link', function () {

    $target = $_SERVER['DOCUMENT_ROOT'] . "/auth/1-ppid/storage/app/public";
    $link = $_SERVER['DOCUMENT_ROOT'] . "/auth/storage";

    if (symlink($target, $link)) {
        return 'Symlink successfully..';
    } else {
        return 'Gagal..';
    }
});

// ROUTE SEED
Route::get('/seed', function () {
    return Artisan::call('migrate:fresh --seed');
});

// ROUTE LOGIN
Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin', [AuthController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// ROUTE DASHBOARD INDEX
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// ROUTE DASHBOARD EDIT LANDING PAGE
Route::get('/dashboard/landing/ppid', [LandingController::class, 'data'])->middleware('auth')->name('admin_landing_ppid');
Route::get('/dashboard/landing/permohonan', [LandingController::class, 'data'])->middleware('auth')->name('admin_landing_permohonan');
Route::get('/dashboard/landing/slogan', [LandingController::class, 'data'])->middleware('auth')->name('admin_landing_slogan');
Route::get('/dashboard/landing/infografis', [LandingController::class, 'data'])->middleware('auth')->name('admin_landing_infografis');
Route::get('/dashboard/footer', [LandingController::class, 'data'])->middleware('auth')->name('admin_landing_footer');
// ROUTE UPDATE
Route::post('/landing/ppid/update', [LandingController::class, 'update'])->name('admin_landing_ppid_update');
Route::post('/landing/permohonan/update', [LandingController::class, 'update'])->name('admin_landing_permohonan_update');;
Route::post('/landing/quotes/update', [LandingController::class, 'update'])->name('admin_landing_slogan_update');
Route::post('/landing/infografis/update', [LandingController::class, 'update'])->name('admin_landing_infografis_update');
Route::post('/dashboard/footer', [LandingController::class, 'update'])->middleware('auth')->name('admin_landing_footer_update');

// ROUTE DASHBOARD TENTANG
Route::get('/dashboard/tentang/profil', [TentangController::class, 'indexAdmin'])->name('tentang_profile_admin')->middleware('auth');
Route::get('/dashboard/tentang/visi-misi', [TentangController::class, 'indexAdmin'])->name('tentang_visi_misi_admin')->middleware('auth');
Route::get('/dashboard/tentang/tugas-fungsi', [TentangController::class, 'indexAdmin'])->name('tentang_tugas_fungsi_admin')->middleware('auth');
Route::get('/dashboard/tentang/struktur-ppid', [TentangController::class, 'indexAdmin'])->name('tentang_struktur_ppid_admin')->middleware('auth');
Route::get('/dashboard/regulasi', [TentangController::class, 'indexAdmin'])->name('regulasi_dashboard')->middleware('auth');
Route::put('/dashboard/tentang/profil/update/{id}', [TentangController::class, 'updateTentang'])->name('update_tentang')->middleware('auth');

// ROUTE DASHBOARD FORMULIR
Route::get('/dashboard-formulir-permohonan-informasi-publik', [TentangController::class, 'indexAdmin'])->name('formulir_permohonan')->middleware('auth');
Route::get('/dashboard-formulir-keberatan-layanan-informasi-publik', [TentangController::class, 'indexAdmin'])->name('formulir_keberatan')->middleware('auth');
Route::get('/dashboard-formulir-penyelesaian-sengketa-informasi-publik', [TentangController::class, 'indexAdmin'])->name('formulir_sengketa')->middleware('auth');
Route::put('/dashboard-formulir/update/{id}', [TentangController::class, 'updateTentang'])->name('update_formulir')->middleware('auth');

// ROUTE DASHBOARD BERITA
Route::get('/dashboard/berita', [BeritaController::class, 'indexAdmin'])->name('admin_berita')->middleware('auth');
Route::post('/dashboard/berita/add', [BeritaController::class, 'addAdmin'])->name('admin_add_berita')->middleware('auth');
Route::put('/dashboard/berita/update/{id}', [BeritaController::class, 'updateAdmin'])->name('admin_update_berita')->middleware('auth');
Route::delete('/dashboard/berita/delete/{id}', [BeritaController::class, 'deleteAdmin'])->name('admin_delete_berita')->middleware('auth');

// ROUTE DASHBOARD INFORMASI PUBLIK
Route::get('/dashboard/informasi/informasi-berkala', [InformasiPublikController::class, 'indexAdmin'])->name('admin_informasi_berkala')->middleware('auth');
Route::get('/dashboard/informasi/informasi-setiap-saat', [InformasiPublikController::class, 'indexAdmin'])->name('admin_informasi_setiap_saat')->middleware('auth');
Route::get('/dashboard/informasi/informasi-dikecualikan', [InformasiPublikController::class, 'indexAdmin'])->name('admin_informasi_dikecualikan')->middleware('auth');
Route::get('/dashboard/informasi/informasi-serta-merta', [BeritaController::class, 'indexAdmin'])->name('admin_informasi_serta_merta')->middleware('auth');
Route::put('/dashboard/informasi-publik/update/{id}', [InformasiPublikController::class, 'update'])->name('admin_update_informasi_publik')->middleware('auth');
// ROUTE LIST INFORMAI PUBLIK
Route::get('/dashboard/informasi/list-informasi/{data}', [InformasiPublikController::class, 'listInformasi'])->name('admin_list_informasi_publik')->middleware('auth');
Route::post('/dashboard/informasi/list-informasi/add', [InformasiPublikController::class, 'addListInformasi'])->name('admin_add_list_informasi_publik')->middleware('auth');
Route::put('/dashboard/informasi/list-informasi/{data}', [InformasiPublikController::class, 'updateListInformasi'])->name('admin_update_list_informasi_publik')->middleware('auth');
Route::delete('/dashboard/informasi/list-informasi/{data}', [InformasiPublikController::class, 'deleteListInformasi'])->name('admin_delete_list_informasi_publik')->middleware('auth');

// ROUTE LAPORAN BIASA
Route::get('/dashboard/laporan/akses-informasi-publik', [LaporanController::class, 'indexAdmin1'])->name('admin_laporan_akses')->middleware('auth');
Route::post('/dashboard/laporan/akses-informasi-publik/add', [LaporanController::class, 'addLaporanAkses'])->name('admin_add_laporan_akses')->middleware('auth');
Route::post('/dashboard/laporan/akses-informasi-publik/update/{id}', [LaporanController::class, 'updateLaporanAkses'])->name('admin_update_laporan_akses')->middleware('auth');
Route::get('/dashboard/laporan/akses-informasi-publik/{tahun}', [LaporanController::class, 'imgLaporanAkses'])->name('admin_img_laporan_akses')->middleware('auth');
Route::get('/dashboard/laporan/akses-informasi-publik/delete/{id}', [LaporanController::class, 'imgDeleteLaporanAkses'])->name('admin_img_laporan_akses_delete')->middleware('auth');

Route::get('/dashboard/laporan/layanan-informasi-publik', [LaporanController::class, 'indexAdmin'])->name('admin_laporan_layanan')->middleware('auth');
Route::get('/dashboard/laporan/survei-layanan-informasi', [LaporanController::class, 'indexAdmin'])->name('admin_laporan_survei')->middleware('auth');

Route::get('/dashboard/laporan/delete/{id}', [LaporanController::class, 'deleteAdmin'])->name('admin_laporan_delete')->middleware('auth');
Route::get('/dashboard/laporan-akses/delete/{id}', [LaporanController::class, 'deleteLaporanAkses'])->name('admin_laporan_gambar_delete')->middleware('auth');
Route::put('/dashboard/laporan/update/{id}', [LaporanController::class, 'updateAdmin'])->name('admin_laporan_update')->middleware('auth');
Route::post('/dashboard/laporan/add', [LaporanController::class, 'addAdmin'])->name('admin_laporan_add')->middleware('auth');
