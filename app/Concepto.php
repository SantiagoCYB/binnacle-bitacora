<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Concepto extends Model
{
    use SoftDeletes;
    
    protected $table='conceptos';
    protected $primarykey="id";
    protected $dates = ['deleted_at'];
    protected $fillable=[
    	'id',
        'documento',
    	'nombre',
    	'codigo',
    	'detalle',
        'descripcion',
    ];
}

