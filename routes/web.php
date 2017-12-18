<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('bitacora/personas', 'PersonasController');
Route::resource('bitacora/conceptos', 'ConceptosController');

//Generar pdf
Route::get('bitacora/personas', 'PersonasController@index')->name('personas');
Route::get('descargar-personaspdf', 'PersonasController@pdf')->name('personas.pdf');


//Generar excel.
Route::get('descargar-personas', 'PersonasController@excel')->name('personas.excel');
Route::get('descargar-conceptos', 'ConceptosController@excel')->name('conceptos.excel');