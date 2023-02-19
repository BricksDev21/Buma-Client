<?php

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
})->name('home');

Route::get('/kegiatan', function () {
    return view('about');
})->name('kegiatan');

Route::view('/download', 'Download-page')->name('download');
Route::view('/operator', 'form-operator')->name('operator');
Route::view('/pengawas-produksi', 'form-pengawas-produksi')->name('pengawas');
Route::view('/add-skill','add-skill')->name('add-skill');
Route::view('/experience','experience')->name('experience');
Route::view('/skill-up','skill-up')->name('skill-up');
Route::view('/variant-skill','variant-skill')->name('variant-skill');
Route::view('/basic-operator','basic-operator')->name('basic-operator');
Route::view('/bank-prosedur','bank-prosedur')->name('bank-prosedur');


