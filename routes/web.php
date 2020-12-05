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
Route::post('/TvLaidos', 'TvLaidaController@store')->name('tvLaidos.store');
Route::get('/TvLaidos/create', 'TvLaidaController@create')->name('tvLaidos.create');
Route::put('/TvLaidos/{id}', 'TvLaidaController@update')->name('tvLaidos.update');
Route::delete('/TvLaidos/{id}', 'TvLaidaController@destroy')->name('tvLaidos.destroy');
Route::get('/TvLaidos/{id}/edit', 'TvLaidaController@edit')->name('tvLaidos.edit');


Route::get('/Sezonai', 'SezonaiController@index')->name('sezonai');
Route::post('/Sezonai', 'SezonaiController@store')->name('sezonai.store');
Route::get('/Sezonai/create', 'SezonaiController@create')->name('sezonai.create');
Route::put('/Sezonai/{id}', 'SezonaiController@update')->name('sezonai.update');
Route::delete('/Sezonai/{id}', 'SezonaiController@destroy')->name('sezonai.destroy');
Route::get('/Sezonai/{id}/edit', 'SezonaiController@edit')->name('sezonai.edit');

Route::get('/Aktoriai', 'AktoriaiController@index')->name('aktoriai');
Route::post('/Aktoriai', 'AktoriaiController@store')->name('aktoriai.store');
Route::get('/Aktoriai/create', 'AktoriaiController@create')->name('aktoriai.create');
Route::put('/Aktoriai/{id}', 'AktoriaiController@update')->name('aktoriai.update');
Route::delete('/Aktoriai/{data}', 'AktoriaiController@destroy')->name('aktoriai.destroy');
Route::get('/Aktoriai/{id}/edit', 'AktoriaiController@edit')->name('aktoriai.edit');

Route::get('/Veikejai', 'VeikejaiController@index')->name('veikejai');
Route::post('/Veikejai', 'VeikejaiController@store')->name('veikejai.store');
Route::get('/Veikejai/create', 'VeikejaiController@create')->name('veikejai.create');
Route::put('/Veikejai/{id}', 'VeikejaiController@update')->name('veikejai.update');
Route::delete('/Veikejai/{id}', 'VeikejaiController@destroy')->name('veikejai.destroy');
Route::get('/Veikejai/{id}/edit', 'VeikejaiController@edit')->name('veikejai.edit');

Route::get('/Kurejai', 'KurejaiController@index')->name('kurejai');
Route::post('/Kurejai', 'KurejaiController@store')->name('kurejai.store');
Route::get('/Kurejai/create', 'KurejaiController@create')->name('kurejai.create');
Route::put('/Kurejai/{id}', 'KurejaiController@update')->name('kurejai.update');
Route::delete('/Kurejai/{id}', 'KurejaiController@destroy')->name('kurejai.destroy');
Route::get('/Kurejai/{id}/edit', 'KurejaiController@edit')->name('kurejai.edit');

