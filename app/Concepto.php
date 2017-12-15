<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    protected $table='conceptos';
    protected $primarykey="id";

    protected $fillable=[
    	'id',
        'documento',
    	'nombre',
    	'codigo',
    	'detalle',
        'descripcion',
        'estado',
    ];
}

