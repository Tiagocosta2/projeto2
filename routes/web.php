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
Route::get('/', 'App\Http\Controllers\PortalController@index')
			->name('index');
Route::get('/noticias', 'App\Http\Controllers\PortalController@noticias')
			->name('noticias');
Route::get('/empresa', 'App\Http\Controllers\PortalController@empresa')
			->name('empresa');
Route::get('/ondeestamos', 'App\Http\Controllers\PortalController@ondeestamos')
			->name('ondeestamos');
Route::get('/contactos', 'App\Http\Controllers\PortalController@contactos')
			->name('contactos');


Route::post('/ondeestamos', 'App\Http\Controllers\PortalController@processarForm')
			->name('processar.form');