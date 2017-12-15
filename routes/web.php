<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('bitacora/personas', 'PersonasController');

Route::resource('bitacora/conceptos', 'ConceptosController');