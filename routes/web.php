<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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
});

Route::get('/error', function () {
    return "<h1>Server error : ada kesalahan di server</h1>";
});

Route::get('/error', function () {
    return "<h1>Server error : ada kesalahan di server 2 ini yang menang</h1>";
});


Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('/pegawai/{nama}', 'App\Http\Controllers\pegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');
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


