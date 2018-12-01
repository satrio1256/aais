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

Route::get('/', function () {
  return view('index');
});

Route::get('/login', ['uses' => 'LoginController@getLogin']);
Route::get('/penguji', ['uses' => 'PengujianController@getViewPenguji']);
Route::get('/penguji/input', ['uses' => 'PengujianController@getInputPenguji']);
Route::get('/perakit', ['uses' => 'PerakitanController@getViewPerakit']);
Route::get('/perakit/input', ['uses' => 'PerakitanController@getViewInputPerakit']);
Route::get('/sdlogistik', ['uses' => 'SDLogistikController@getViewSDLogistik']);
Route::get('/sdlogistik/input', ['uses' => 'SDLogistikController@getInputSdlogistik']);
Route::get('/logout', ['uses' => 'LoginController@logout']);
Route::post('/login/process', ['uses' => 'LoginController@authenticate']);
Route::post('/penguji/input/process', ['uses' => 'PengujianController@processInput']);
Route::post('/perakit/input/process', ['uses' => 'PerakitanController@processStatusPerakitan']);
Route::post('/sdlogistik/input/process', ['uses' => 'PerakitanController@processInputSdl']);

Route::get('/signup', function() {
  return view('daftar');
});
