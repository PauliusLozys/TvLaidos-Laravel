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

Route::get('/', 'App\Http\Controllers\ApieMusController@index');
Route::get('/Kontaktai', 'App\Http\Controllers\KontaktaiController@index');

Route::get('/TvLaidos', 'App\Http\Controllers\TvLaidaController@index')->name('tvLaidos');
Route::get('/Sezonai', 'App\Http\Controllers\SezonaiController@index')->name('sezonai');
Route::get('/Aktoriai', 'App\Http\Controllers\AktoriaiController@index')->name('aktoriai');
Route::get('/Veikejai', 'App\Http\Controllers\VeikejaiController@index')->name('veikejai');
Route::get('/Kurejai', 'App\Http\Controllers\KurejaiController@index')->name('kurejai');

