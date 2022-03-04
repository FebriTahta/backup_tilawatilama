<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\ExportController;
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

Route::get('/', function () {
    // return view('welcome');
    // $schedule = Http::get('https://api.banghasan.com/sholat/format/json/jadwal/kota/770/tanggal/'.date("Y-m-d"))->json()['jadwal']['data'];
    // return view('landing.index_landing',compact('schedule'));
    // return view('landing.index_landing');
    return redirect('/admin-dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/', function () {
//     $schedule = Http::get('https://api.banghasan.com/sholat/format/json/jadwal/kota/742/tanggal/'.date("Y-m-d"))->json()['jadwal']['data'];
//     return view('welcome', compact('schedule'));
// });

// ADMIN BE PAGE DASHBOARD
Route::get('/admin-dashboard',[AdminController::class, 'page_admin_dashboard'])->name('page.admin_dashboard');

// ADMIN BE POST
Route::get('/admin-post',[AdminController::class, 'page_admin_post'])->name('page.post.new');
Route::get('/admin-post-list',[AdminController::class, 'page_admin_list_post'])->name('page.post.list');

// KATEGORI
Route::get('/admin-kategori-page',[KategoriController::class, 'page_admin_kategori_page'])->name('page.master.kategori_page');
Route::post('/admin-kategori-post',[KategoriController::class, 'page_admin_kategori_post'])->name('page.master.kategori_post');
Route::get('/admin-kategori-list',[KategoriController::class, 'page_admin_kategori_list'])->name('page.master.kategori_list');
Route::post('/admin-kategori-delete',[KategoriController::class, 'page_admin_kategori_delete'])->name('page.master.kategori_delete');

// CABANG
Route::get('/admin-cabang-page',[CabangController::class, 'page_admin_cabang_page'])->name('page.master.cabang_page');
Route::get('/admin-cabang-list',[CabangController::class, 'page_admin_cabang_list'])->name('page.master.cabang_list');
Route::get('/admin-cabang-page-add',[CabangController::class, 'page_admin_cabang_page_add'])->name('page.master.cabang_page_add');

// LEMBAGA
Route::get('/admin-lembaga-page',[LembagaController::class, 'page_admin_lembaga_page'])->name('page.master.lembaga_page');
Route::get('/admin-lembaga-list',[LembagaController::class, 'page_admin_lembaga_list'])->name('page.master.lembaga_list');

// KRITERIA SYAHADAH
Route::get('/admin-kriteria-page',[KriteriaController::class, 'page_admin_kriteria_page'])->name('page.master.kriteria_page');
Route::get('/admin-kriteria-list',[KriteriaController::class, 'page_admin_kriteria_list'])->name('page.master.kriteria_list');

// PESERTA
Route::get('/admin-peserta-page',[PesertaController::class, 'page_admin_peserta_page'])->name('page.laporan.peserta_page');
Route::get('/admin-peserta-list',[PesertaController::class, 'page_admin_peserta_list'])->name('page.laporan.peserta_list');

// PELATIHAN
Route::get('/admin-pelatihan-page',[PelatihanController::class,'page_admin_pelatihan_page'])->name('page.laporan.pelatihan_page');
Route::get('/admin-pelatihan-list',[PelatihanController::class, 'page_admin_pelatihan_list'])->name('page.laporan.pelatihan_list');
Route::get('/admin-peserta-pelatihan/{pelatihan_id}/page',[PelatihanController::class,'page_admin_peserta_pelatihan_page'])->name('page.laporan.peserta_pelatihan_page');
Route::get('/admin-peserta-pelatihan/{pelatihan_id}/list',[PelatihanController::class,'page_admin_peserta_pelatihan_list'])->name('page.laporan.peserta_pelatihan_list');
// UPDATE DATA PESERTA PELATIHAN
Route::post('/admin-peserta-pelatihan/edit',[PelatihanController::class,'page_admin_peserta_pelatihan_edit'])->name('page.laporan.peserta_pelatihan_edit');

// CETAK SYAHADAH 
Route::get('/admin-cetak-depan-page',[CetakController::class,'page_cetak_depan'])->name('page.cetak.depan_page');
Route::get('/admin-cetak-belakang-page',[CetakController::class,'page_cetak_belakang'])->name('page.cetak.belakang_page');
Route::get('/pilih-program-diklat/{program_id}',[CetakController::class,'pilih_program_diklat']);
Route::post('/admin-cetak-syahadah-belakang',[CetakController::class,'cetak_belakang'])->name('cetak_belakang');
Route::post('/admin-cetak-syahadah-depan',[CetakController::class,'cetak_depan'])->name('cetak_depan');

// CETAK DEPAN & BELAKANG PERSEORANGAN
Route::get('/admin-cetak-depan-perseorangan/{peserta_id}',[CetakController::class,'cetak_depan_seorang'])->name('cetak.depan_seorang');
Route::get('/admin-cetak-belakang-perseorangan/{peserta_id}',[CetakCOntroller::class,'cetak_belakang_seorang'])->name('cetak.belakang_seorang');

// EXPORT
Route::get('/admin-export-data-peserta/{pelatihan_id}',[ExportController::class,'export_peserta'])->name('export_peserta');
// BACKUP DB TILAWATI
// MASTER


