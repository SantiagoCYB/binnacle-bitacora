<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('bitacora/personas', 'PersonasController');
Route::resource('bitacora/conceptos', 'ConceptosController');

//Generar pdf personas
Route::get('bitacora/personas', 'PersonasController@index')->name('personas');
Route::get('descargar-personaspdf', 'PersonasController@pdf')->name('personas.pdf');

//Generar pdf conceptos
Route::get('bitacora/conceptos', 'ConceptosController@index')->name('conceptos');
Route::get('descargar-conceptospdf', 'ConceptosController@pdf')->name('conceptos.pdf');

//Generar excel.
Route::get('descargar-personas', 'PersonasController@excel')->name('personas.excel');
Route::get('descargar-conceptos', 'ConceptosController@excel')->name('conceptos.excel');