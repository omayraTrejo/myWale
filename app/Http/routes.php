<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');
});




Route::resource('almacen/categoria','CategoriaController');

Route::resource('votosGenerales/cantidadVotos','EstadisticaController');



Route::auth();

Route::resource('departamento/SANTA CRUZ','controllerSantaCruz');
Route::resource('departamento/BENI','ControllerBeni');
Route::resource('departamento/CHUQUISACA','ControllerChuquisaca');
Route::resource('departamento/COCHABAMBA','ControllerCochabamba');
Route::resource('departamento/LAPAZ','ControllerLAPaz');
Route::resource('departamento/ORURO','ControllerOruro');
Route::resource('departamento/PANDO','ControllerPando');
Route::resource('departamento/POTOSI','ControllerPotosi');
Route::resource('departamento/TARIJA','ControllerTarija');
Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');



Route::resource('partido/ListaPartidos','ControllerPartido');
Route::resource('mesa/ListaMesa','ControllerMesa');
Route::resource('departamentolista/ListaDepartamento','ControllerDepartamento');
Route::resource('seguridad/usuario','ControllerUser');
Route::resource('delegado/Lista','ControllerDelegado');



Route::get('excel','ExportacionController@getExcel');
Route::get('pdfprueva','ExportacionController@pdfprueba');
Route::get('ListaMesa','ControllerMesa@imprimir');