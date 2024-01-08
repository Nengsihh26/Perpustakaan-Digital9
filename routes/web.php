<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MatakuliahController;
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
    return view('index');
    // return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{NIM}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/update/{NIM}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/destroy/{NIM}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('/dosen/store', [DosenController::class, 'store'])->name('dosen.store');
Route::get('/dosen/edit/{NIP}', [DosenController::class, 'edit'])->name('dosen.edit');
Route::put('/dosen/update/{NIP}', [DosenController::class, 'update'])->name('dosen.update');
Route::delete('/dosen/destroy/{NIP}', [DosenController::class, 'destroy'])->name('dosen.destroy');

Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/prodi/create', [ProdiController::class, 'create'])->name('prodi.create');
Route::post('/prodi/store', [ProdiController::class, 'store'])->name('prodi.store');
Route::get('/prodi/edit/{Kode_Prodi}', [ProdiController::class, 'edit'])->name('prodi.edit');
Route::put('/prodi/update/{Kode_Prodi}', [ProdiController::class, 'update'])->name('prodi.update');
Route::delete('/prodi/destroy/{Kode_Prodi}', [ProdiController::class, 'destroy'])->name('prodi.destroy');

Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah/store', [MatakuliahController::class, 'store'])->name('matakuliah.store');
Route::get('/matakuliah/edit/{Kode_MK}', [MatakuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('/matakuliah/update/{Kode_MK}', [MatakuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('/matakuliah/destroy/{Kode_MK}', [MatakuliahController::class, 'destroy'])->name('matakuliah.destroy');
