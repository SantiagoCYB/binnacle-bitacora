<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='personas';
    protected $primarykey="id";
    public $timestamps=false;

    protected $fillable=[
    	'documento',
        'apellidos',
    	'nombre',
    	'direccion',
    	'genero',
        'condicion',
    ];
}
