<?php

use App\Http\Controllers\KRSController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/mahasiswa', MahasiswaController::class);
Route::resource('/dosen', DosenController::class);
Route::resource('/matakuliah', MataKuliahController::class);
Route::resource('/jurusan', JurusanController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/krs', KRSController::class);



// Route::get      => Get Data     => R => select
// SELECT ALL   /   SELECT SPESIFIK
// Route::post     => Save Data    => C => insert into  /   create
// Route::put      => Update Data  => U => update  /   alter
// Route::delete   => Delete Data  => D => delete  /   drop

// Create, Read, Update, Delete