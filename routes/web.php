<?php

use App\Http\Controllers\PerpusController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Perpustakaan/Login', [PerpusController::class, 'login'])->name('login')->middleware('guest');
Route::post('/Cek', [PerpusController::class, 'login1']);
Route::get('/Perpustakaan/Logout', [PerpusController::class, 'logout']);
Route::get('/Perpustakaan/UbahSandi', [PerpusController::class, 'upSandi']);
Route::post('/UbahSandi', [PerpusController::class, 'puSandi']);

Route::get('/Laporan', [PerpusController::class, 'joinTabel'])->middleware('auth');

Route::get('/Beranda', [PerpusController::class, 'berandaBook'])->middleware('auth');
Route::get('/Buku', [PerpusController::class, 'tmDataBuku'])->middleware('auth');
Route::get('/Buku/Tambah', [PerpusController::class, 'inpBook'])->middleware('auth');
Route::post('/Buku/Simpan', [PerpusController::class, 'psBuku'])->middleware('auth');
Route::get('/Buku/Edit/{id_bk}', [PerpusController::class, 'upBook'])->middleware('auth');
Route::post('/Buku/Update/{id_bk}', [PerpusController::class, 'puBook'])->middleware('auth');
Route::get('/Buku/Hapus/{id_bk}', [PerpusController::class, 'delBook'])->middleware('auth');

Route::get('/Anggota', [PerpusController::class, 'tmDataAng'])->middleware('auth');
Route::get('/Anggota/Tambah', [PerpusController::class, 'inpAngg'])->middleware('auth');
Route::post('/Anggota/Simpan', [PerpusController::class, 'psAngg'])->middleware('auth');
Route::get('/Anggota/Edit/{nim}', [PerpusController::class, 'upAngg'])->middleware('auth');
Route::post('/Anggota/Update/{nim}', [PerpusController::class, 'puAngg'])->middleware('auth');
Route::get('/Anggota/Hapus/{nim}', [PerpusController::class, 'delAnggota'])->middleware('auth');

Route::get('/Pinjaman', [PerpusController::class, 'tmDataPinjam'])->middleware('auth');
Route::get('/Pinjaman/Tambah', [PerpusController::class, 'idPK'])->middleware('auth');
Route::post('/Pinjaman/Simpan', [PerpusController::class, 'psPinjam'])->middleware('auth');
Route::get('/Pinjaman/Edit/{id_pj}', [PerpusController::class, 'upPinjam'])->middleware('auth');
Route::post('/Pinjaman/Update/{id_pj}', [PerpusController::class, 'puPinjam'])->middleware('auth');
Route::get('/Pinjaman/Hapus/{id_pj}', [PerpusController::class, 'delPinjaman'])->middleware('auth');

Route::get('/Kembali', [PerpusController::class, 'tmDataKembali'])->middleware('auth');
Route::get('/Kembali/Tambah', [PerpusController::class, 'idPK2'])->middleware('auth');
Route::post('/Kembali/Simpan', [PerpusController::class, 'psKembali'])->middleware('auth');
Route::get('/Kembali/Edit/{id_kmb}', [PerpusController::class, 'upKembali'])->middleware('auth');
Route::post('/Kembali/Update/{id_kmb}', [PerpusController::class, 'puKembali'])->middleware('auth');
Route::get('/Kembali/Hapus/{id_kmb}', [PerpusController::class, 'delKembali'])->middleware('auth');

// Anggota -----------------------------------------------------------------------------------------------------------------------------
Route::get('/Library/Beranda', [PerpusController::class, 'tmBerandaBuku']);

// Admin -------------------------------------------------------------------------------------------------------------------------------
Route::get('/Perpustakaan/Pegawai', [PerpusController::class, 'tmp_AdmPegawai'])->middleware('auth');
Route::get('/Pegawai/Tambah', [PerpusController::class, 'inpPeg'])->middleware('auth');
Route::post('/Pegawai/Simpan', [PerpusController::class, 'psPeg'])->middleware('auth');
Route::get('/Pegawai/Edit/{id_pg}', [PerpusController::class, 'upPeg'])->middleware('auth');
Route::post('/Pegawai/Update/{id_pg}', [PerpusController::class, 'puPeg'])->middleware('auth');
Route::get('/Pegawai/Hapus/{id_pg}', [PerpusController::class, 'delPeg'])->middleware('auth');

Route::get('/Perpustakaan/Users', [PerpusController::class, 'tmp_AdmUsers'])->middleware('auth');
Route::get('/Users/Tambah', [PerpusController::class, 'inpUsers'])->middleware('auth');
Route::post('/Users/Simpan', [PerpusController::class, 'psUsers'])->middleware('auth');
Route::get('/Users/Edit/{id}', [PerpusController::class, 'upUsers'])->middleware('auth');
Route::post('/Users/Update/{id}', [PerpusController::class, 'puUsers'])->middleware('auth');
Route::get('/Users/Hapus/{id}', [PerpusController::class, 'delUsers'])->middleware('auth');

Route::get('/Perpustakaan/Anggota', [PerpusController::class, 'tmDataAnggota'])->middleware('auth');
Route::get('/Perpustakaan/Anggota/Tambah', [PerpusController::class, 'inpAnggota'])->middleware('auth');
Route::post('/Perpustakaan/Anggota/Simpan', [PerpusController::class, 'psAnggata'])->middleware('auth');
Route::get('/Perpustakaan/Anggota/Edit/{nim}', [PerpusController::class, 'upAnggota'])->middleware('auth');
Route::post('/Perpustakaan/Anggota/Update/{nim}', [PerpusController::class, 'puAnggota'])->middleware('auth');
Route::get('/Perpustakaan/Anggota/Hapus/{nim}', [PerpusController::class, 'delAngg'])->middleware('auth');
