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
    return view('welcome');
});

Route::get('bagiannur', 'App\Http\Controllers\bagiannurController@index');
Route::get('barangnur', 'App\Http\Controllers\barangnurController@index');
Route::get('pengeluarannur', 'App\Http\Controllers\pengeluarannurController@index');
Route::get('pengeluaranitemnur', 'App\Http\Controllers\bpengeluaranitemnurController@index');
Route::get('petugasnur', 'App\Http\Controllers\petugasnurController@index');
