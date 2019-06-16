<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('mata-kuliah', 'MataKuliahController');
Route::resource('ruangan', 'RuanganController');
Route::resource('dosen', 'DosenController');
Route::resource('jadwal', 'JadwalKuliahController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'JadwalKuliahController@index');