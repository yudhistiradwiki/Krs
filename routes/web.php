<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\TahunAkadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\KhsController;

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

//login
Route::get('/', [LoginController::class, 'index']) -> name('login') -> middleware('guest');
Route::get('/login', [LoginController::class, 'index']) -> name('login') -> middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/admin', function () {
    return view('home-admin');
}) -> middleware('auth:user');

Route::get('/student', function () {
    return view('home-mahasiswa');
}) -> middleware('auth:user,mahasiswa');

Route::get('/lecture', function () {
    return view('home-dosen');
}) -> middleware('auth:user,dosen');




//mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']) -> middleware('auth:user');
Route::get('/mahasiswa/insert', [MahasiswaController::class, 'tambah']) -> middleware('auth:user');;
Route::post('/mahasiswa/save', [MahasiswaController::class, 'simpan'])-> middleware('auth:user');;
Route::get('/mahasiswa/update/{nim}', [MahasiswaController::class, 'edit'])-> middleware('auth:user');;
Route::post('/mahasiswa/updated/{nim}', [MahasiswaController::class, 'update'])-> middleware('auth:user');;
Route::get('/mahasiswa/delete/{nim}', [MahasiswaController::class, 'delete'])-> middleware('auth:user');;
Route::get('/mahasiswa/detail/{nim}', [MahasiswaController::class, 'detail'])-> middleware('auth:user');;
Route::get('/mahasiswa/cari', [MahasiswaController::class, 'cari'])-> middleware('auth:user');;


//prodi
Route::get('/prodi', [ProdiController::class, 'index'])-> middleware('auth:user');;
Route::get('/prodi/insert', [ProdiController::class, 'tambah'])-> middleware('auth:user');;
Route::post('/prodi/save', [ProdiController::class, 'simpan'])-> middleware('auth:user');;
Route::get('/prodi/update/{nim}', [ProdiController::class, 'edit'])-> middleware('auth:user');;
Route::post('/prodi/updated/{nim}', [ProdiController::class, 'update'])-> middleware('auth:user');;
Route::get('/prodi/delete/{nim}', [ProdiController::class, 'delete'])-> middleware('auth:user');;
Route::get('/prodi/cari', [ProdiController::class, 'cari'])-> middleware('auth:user');;


//dosen
Route::get('/dosen', [DosenController::class, 'index'])-> middleware('auth:user');;
Route::get('/dosen/insert', [DosenController::class, 'tambah'])-> middleware('auth:user');;
Route::post('/dosen/save', [DosenController::class, 'simpan'])-> middleware('auth:user');;
Route::get('/dosen/update/{nim}', [DosenController::class, 'edit'])-> middleware('auth:user');;
Route::post('/dosen/updated/{nim}', [DosenController::class, 'update'])-> middleware('auth:user');;
Route::get('/dosen/delete/{nim}', [DosenController::class, 'delete'])-> middleware('auth:user');;
Route::get('/dosen/detail/{nim}', [DosenController::class, 'detail'])-> middleware('auth:user');;
Route::get('/dosen/cari', [DosenController::class, 'cari'])-> middleware('auth:user');;


//matkul
Route::get('/matkul', [MatkulController::class, 'index'])-> middleware('auth:user');;
Route::get('/matkul/insert', [MatkulController::class, 'tambah'])-> middleware('auth:user');;
Route::post('/matkul/save', [MatkulController::class, 'simpan'])-> middleware('auth:user');;
Route::get('/matkul/update/{nim}', [MatkulController::class, 'edit'])-> middleware('auth:user');;
Route::post('/matkul/updated/{nim}', [MatkulController::class, 'update'])-> middleware('auth:user');;
Route::get('/matkul/delete/{nim}', [MatkulController::class, 'delete'])-> middleware('auth:user');;
Route::get('/matkul/detail/{nim}', [MatkulController::class, 'detail'])-> middleware('auth:user');;
Route::get('/matkul/cari', [MatkulController::class, 'cari'])-> middleware('auth:user');;


//tahun akademik
Route::get('/tahunakad', [TahunAkadController::class, 'index'])-> middleware('auth:user');;
Route::get('/tahunakad/insert', [TahunAkadController::class, 'tambah'])-> middleware('auth:user');;
Route::post('/tahunakad/save', [TahunAkadController::class, 'simpan'])-> middleware('auth:user');;
Route::get('/tahunakad/update/{nim}', [TahunAkadController::class, 'edit'])-> middleware('auth:user');;
Route::post('/tahunakad/updated/{nim}', [TahunAkadController::class, 'update'])-> middleware('auth:user');;
Route::get('/tahunakad/delete/{nim}', [TahunAkadController::class, 'delete'])-> middleware('auth:user');;
Route::get('/tahunakad/cari', [TahunAkadController::class, 'cari'])-> middleware('auth:user');;

//krs
Route::get('/krs/{nim}/{id_thn_akad}', [KrsController::class, 'index'])-> middleware('auth:mahasiswa');
Route::get('/krs/view', [KrsController::class, 'datamatkul']);
Route::get('/krs/insert', [DosenController::class, 'tambah'])-> middleware('auth:mahasiswa');;
Route::post('/krs/save', [KrsController::class, 'simpan'])-> middleware('auth:mahasiswa');;
Route::get('/krs/cari', [KrsController::class, 'cari'])-> middleware('auth:mahasiswa');;
Route::get('/krs/print/{nim}/{id_thn_akad}', [KrsController::class, 'generatePDF']) -> middleware('auth:mahasiswa');


//nilai
Route::get('/nilai/select/{nidn}', [NilaiController::class, 'selectmk'])-> middleware('auth:dosen');
Route::get('/nilai/input/{kode_matakuliah}/{id_thn_akad}', [NilaiController::class, 'inputnilai'])-> middleware('auth:dosen');
Route::post('/nilai/save', [NilaiController::class, 'simpan'])-> middleware('auth:dosen');;


//khs
Route::get('/khs/view/{nim}/{thn}', [KhsController::class, 'coba'])-> middleware('auth:mahasiswa');
Route::get('/khs/print/{nim}/{id_thn_akad}', [KhsController::class, 'generatePDF'])-> middleware('auth:mahasiswa');

Route::get('/khs', function () {
    return view('khs-select');
}) -> middleware('auth:mahasiswa');

Route::get('/khs/view', function () {
    return view('khs-list');
}) -> middleware('auth:mahasiswa');


//profile
Route::get('/profile/mahasiswa/{nim}', [MahasiswaController::class, 'edit'])-> middleware('auth:user,mahasiswa,dosen');;
Route::post('/profile/mahasiswa/updated/{nim}', [MahasiswaController::class, 'update'])-> middleware('auth:user,mahasiswa,dosen');;
