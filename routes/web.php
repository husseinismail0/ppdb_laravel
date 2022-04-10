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

route::get('/siswa1',function(){
	$a = 5;
	$b = 7;
	$hasil = $a * $b;
	echo $hasil;
});

Route::get('/siswa','App\Http\Controllers\siswaController@index');
