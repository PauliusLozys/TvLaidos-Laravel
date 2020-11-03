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

Route::get('/', 'ApieMusController@index');
Route::get('/Kontaktai', 'KontaktaiController@index');

Route::get('/TvLaidos', 'TvLaidaController@index')->name('tvLaidos');
Route::get('/Sezonai', 'SezonaiController@index')->name('sezonai');
Route::get('/Aktoriai', 'AktoriaiController@index')->name('aktoriai');
Route::get('/Veikejai', 'VeikejaiController@index')->name('veikejai');
Route::get('/Kurejai', 'KurejaiController@index')->name('kurejai');

