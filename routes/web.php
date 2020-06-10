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
    return view('portal');
})->name('portal');


Route::get('/yocoima', function () {
    return view('acercade.quienes');
})->name('somos');
Route::get('/hacemos', function () {
    return view('acercade.hacemos');
})->name('hacemos');

Route::get('/info', function () {
    return view('inforeal.info');
})->name('info');
Route::get('/infoaemet', function () {
    return view('inforeal.aemet');
})->name('aemet');
Route::get('/infonasa', function () {
    return view('inforeal.nasa');
})->name('nasa');

Route::get('/registro', function () {
    return view('auth.register');
})->name('registro');

Route::get('/colabora', function () {
    return view('colabora.colabora');
})->name('colabora');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/actividades', 'ActividadController@index')->name('actividades');
Route::get('/home/actividades/historial', 'ActividadController@index2')->name('historial');
Route::get('/home/actividades/detalles/{actividad}', 'ActividadController@show')->name('show');
Route::get('/home/actividades/asistes', "ActividadController@asiste")->name("asiste");


Route::group(['middleware' => 'admin'], function () {
    Route::get('/home/actividades/admin', 'ActividadController@admin')->name('admin');
    Route::delete('/home/actividades/admin/{actividad}', "ActividadController@destroy")->name("destroy");
    Route::get('/home/actividades/admin/edit/{actividad}', 'ActividadController@edit')->name('edit');
Route::get('/home/actividades/detallesadmin/{actividad}', 'ActividadController@showadmin')->name('showadmin');

    Route::put('/home/actividades/admin/{actividad}', 'ActividadController@update')->name('update');
    Route::post('/home/actividades/admin', 'ActividadController@store')->name('store');
    Route::get('/home/actividades/admin/create', 'ActividadController@create')->name('create');


});

Route::post('/home/actividades/detalles/unirseactividad', "ActividadController@unirse")->name("unirse");



Route::get('/home/apadrina', 'AnimalController@index')->name('apadrina');


