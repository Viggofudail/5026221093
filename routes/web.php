<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaidbController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\MobilController;
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
    return view('ets');
});

Route::get('/error', function () {
    return "<h1>Server error : ada kesalahan di server</h1>";
});

Route::get('/error', function () {
    return "<h1>Server error : ada kesalahan di server 2 ini yang menang</h1>";
});


Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');
Route::get('/pr/week1', 'App\Http\Controllers\PrController@week1');
Route::get('/pr/week2', 'App\Http\Controllers\PrController@week2');
Route::get('/pr/week3', 'App\Http\Controllers\PrController@week3');
Route::get('/pr/linktree', 'App\Http\Controllers\PrController@linktree');
Route::get('/pr/tm1', 'App\Http\Controllers\PrController@tm1');
Route::get('/about', 'App\Http\Controllers\PrController@about');
Route::get('/contact', 'App\Http\Controllers\PrController@contact');
Route::get('/pricing', 'App\Http\Controllers\PrController@pricing');
Route::get('/faq', 'App\Http\Controllers\PrController@faq');

Route::get('/pegawai', [App\Http\Controllers\PegawaidbController::class, 'index']);
Route::get('/pegawai/tambah', [App\Http\Controllers\PegawaidbController::class, 'tambah']);
Route::post('/pegawai/store', [App\Http\Controllers\PegawaidbController::class, 'store']);
Route::get('/pegawai/cari', [App\Http\Controllers\PegawaidbController::class, 'cari']);

Route::get('/pegawai/edit/{id}', [App\Http\Controllers\PegawaidbController::class, 'edit']);
Route::post('/pegawai/update/{id}', [App\Http\Controllers\PegawaidbController::class, 'update']);
Route::get('/pegawai/delete/{id}', [App\Http\Controllers\PegawaidbController::class, 'delete']);


Route::get('/mobil', [App\Http\Controllers\MobilController::class, 'index']);
Route::get('/mobil/tambah', [App\Http\Controllers\MobilController::class, 'tambah']);
Route::get('/mobil/cari', [App\Http\Controllers\MobilController::class, 'cari']);
Route::post('/mobil/store', [App\Http\Controllers\MobilController::class, 'store']);
Route::get('/mobil/edit/{id}', [App\Http\Controllers\MobilController::class, 'edit']);
Route::post('/mobil/update/{id}', [App\Http\Controllers\MobilController::class, 'update']);
Route::get('/mobil/delete/{id}', [App\Http\Controllers\MobilController::class, 'delete']);

Route::get('/latets', [App\Http\Controllers\latetsController::class, 'index']);
Route::get('/latets/tambah', [App\Http\Controllers\latetsController::class, 'tambah']);
Route::post('/latets/store', [App\Http\Controllers\latetsController::class, 'store']);

Route::get('/counter', [App\Http\Controllers\PageViewController::class, 'counter']);

Route::get('/test', function () {
    return view('template');
});
