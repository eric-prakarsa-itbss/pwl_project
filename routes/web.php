<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('dashboard');

Route::resource('/mahasiswa', MahasiswaController::class);
Route::resource('/dosen', DosenController::class);
Route::resource('/matakuliah', MataKuliahController::class);
Route::resource('/jurusan', JurusanController::class);



// Route::get      => Get Data     => R => select
// SELECT ALL   /   SELECT SPESIFIK
// Route::post     => Save Data    => C => insert into  /   create
// Route::put      => Update Data  => U => update  /   alter
// Route::delete   => Delete Data  => D => delete  /   drop

// Create, Read, Update, Delete