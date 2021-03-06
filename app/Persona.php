<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use SoftDeletes;

    protected $table='personas';
    protected $primarykey="id";
    public $timestamps=false;
    protected $dates = ['deleted_at'];

    protected $fillable=[
    	'documento',
        'apellidos',
    	'nombre',
    	'direccion',
    	'genero',
    ];

    public function conceptos()
    {
        return $this->hasMany('App\Informe');
    }
}
