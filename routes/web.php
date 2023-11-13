<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(DepanController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/siswa', 'siswa')->name('siswa');
    Route::get('/guru', 'guru')->name('guru');
    Route::get('/mapel', 'mapel')->name('mapel');
});

Route::controller(SiswaController::class)->group(function(){
    Route::get('/dataSiswa', 'index')->name('dataSiswa');
    Route::get('/tambahDataSiswa', 'create')->name('tambahDataSiswa');
});

Route::controller(MapelController::class)->group(function(){
    Route::get('/dataMapel', 'index')->name('dataMapel');
    Route::get('/tambahDataMapel', 'create')->name('tambahDataMapel');
    Route::post('/prosesTambahDataMapel', 'store')->name('prosesTambahDataMapel');
});

Route::controller(GuruController::class)->group(function(){
    Route::get('/dataGuru', 'index')->name('dataGuru');
    Route::get('/tambahDataGuru', 'create')->name('tambahDataGuru');
});

Route::controller(KelasController::class)->group(function(){
    Route::get('/dataKelas', 'index')->name('dataKelas');
    Route::get('/tambahDataKelas', 'create')->name('tambahDataKelas');
    Route::post('/prosesTambahDataKelas', 'store')->name('prosesTambahDataKelas');
});

Route::controller(JurusanController::class)->group(function(){
    Route::get('/dataJurusan', 'index')->name('dataJurusan');
    Route::get('/tambahDataJurusan', 'create')->name('tambahDataJurusan');
    Route::post('/prosesTambahDataJurusan', 'store')->name('prosesTambahDataJurusan');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'index')->name('login');
    Route::post('/proses', 'proses_login')->name('proses');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'index')->name('admin');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/user', 'index')->name('user');
});
