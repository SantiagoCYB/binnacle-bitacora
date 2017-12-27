<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Concepto extends Model
{
    use SoftDeletes;
    
    protected $table='conceptos';
    protected $primarykey="id";
    public $timestamps=false;
    protected $dates = ['deleted_at'];
    protected $fillable=[
    	'codigo',
    	'nombre',
        'descripcion',
    ];

    public function persona()
    {
        return $this->hasMany('App\Informe');
    }
}

