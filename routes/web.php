<?php

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('bitacora/personas', 'PersonasController');
Route::resource('bitacora/conceptos', 'ConceptosController');
Route::resource('bitacora/usuarios', 'UsuarioController');
Route::resource('bitacora/informes', 'InformesController');

//Generar excel.
Route::get('descargar-personas', 'PersonasController@excel')->name('personas.excel');
Route::get('descargar-conceptos', 'ConceptosController@excel')->name('conceptos.excel');
Route::get('descargar-informes', 'InformesController@excel')->name('informes.excel');

//Generar pdf informes
Route::get('bitacora/informes', 'InformesController@index')->name('informes');
Route::get('descargar-informespdf', 'InformesController@pdf')->name('informes.pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
