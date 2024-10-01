<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome',['title' => 'Aplikasi Penjualan Barang Berbasis Web dengan Framework Laravel']);
});

Route::get('home',function() {
    return view('home');
});


Route::get('jenis',[JenisController::class, 'index'])->name('jenis.index');
Route::delete('jenis/{id_jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy');
Route::get('jenis/create',[JenisController::class, 'create'])->name('jenis.create');
Route::post('jenis',[JenisController::class, 'store'])->name('jenis.store');
Route::get('jenis/show',[JenisController::class, 'show'])->name('jenis.show');
Route::get('jenis/{id_jenis}/edit', [JenisController::class, 'edit'])->name('jenis.edit');
Route::put('jenis/{id_jenis}', [JenisController::class, 'update'])->name('jenis.update');

Route::get('suplier',[SuplierController::class, 'index'])->name('suplier.index');
Route::delete('suplier/{id_suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');
Route::get('suplier/create',[SuplierController::class, 'create'])->name('suplier.create');
Route::post('suplier',[SuplierController::class, 'store'])->name('suplier.store');
Route::get('suplier/show',[SuplierController::class, 'show'])->name('suplier.show');
Route::get('suplier/{id_suplier}/edit', [SuplierController::class, 'edit'])->name('suplier.edit');
Route::put('suplier/{id_suplier}', [SuplierController::class, 'update'])->name('suplier.update');

Route::get('barang',[BarangController::class, 'index'])->name('barang.index');
Route::delete('barang/{kode_barang}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::get('barang/create',[BarangController::class, 'create'])->name('barang.create');
Route::post('barang',[BarangController::class, 'store'])->name('barang.store');
Route::get('barang/show',[BarangController::class, 'show'])->name('barang.show');
Route::get('barang/{kode_barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('barang/{kode_barang}', [BarangController::class, 'update'])->name('barang.update');

Route::get('pembelian',[PembelianController::class, 'index'])->name('pembelian.index');
Route::delete('pembelian/{nofak_beli}', [PembelianController::class, 'destroy'])->name('pembelian.destroy');
Route::get('pembelian/create',[PembelianController::class, 'create'])->name('pembelian.create');
Route::post('pembelian',[PembelianController::class, 'store'])->name('pembelian.store');
Route::get('pembelian/show',[PembelianController::class, 'show'])->name('pembelian.show');
Route::get('pembelian/{nofak_beli}/edit', [PembelianController::class, 'edit'])->name('pembelian.edit');
Route::put('pembelian/{nofak_beli}', [PembelianController::class, 'update'])->name('pembelian.update');

Route::get('penjualan',[PenjualanController::class, 'index'])->name('penjualan.index');
Route::delete('penjualan/{nofak_jual}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy');
Route::get('penjualan/create',[PenjualanController::class, 'create'])->name('penjualan.create');
Route::post('penjualan',[PenjualanController::class, 'store'])->name('pembelian.store');
Route::get('penjualan/show',[PenjualanController::class, 'show'])->name('pembelian.show');
Route::get('penjualan/{nofak_jual}/edit', [PenjualanController::class, 'edit'])->name('pembelian.edit');
Route::put('penjualan/{nofak_jual}', [PenjualanController::class, 'update'])->name('pembelian.update');

Route::get('manajemen',[ManajemenController::class, 'index'])->name('manajemen.index');
Route::delete('manajemen/{id}', [Controller::class, 'destroy'])->name('manajemen.destroy');
Route::get('manajemen/create',[ManajemenController::class, 'create'])->name('manajemen.create');
Route::post('manajemen',[ManajemenController::class, 'store'])->name('manajemen.store');
Route::get('manajemen/show',[ManajemenController::class, 'show'])->name('manajemen.show');
Route::get('manajemen/{id}/edit', [ManajemenController::class, 'edit'])->name('manajemen.edit');
Route::put('manajemen/{id}', [ManajemenController::class, 'update'])->name('manajemen.update');

//pengguna
Route::get('pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');  
Route::get('pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create');
Route::post('pengguna', [PenggunaController::class, 'store'])->name('pengguna.store');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');