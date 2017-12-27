<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Informe extends Model
{
    use SoftDeletes;
    
    protected $table='informes';
    protected $primarykey="id";
    protected $dates = ['deleted_at'];
    protected $fillable=[
        'persona_id',
        'concepto_id',
        'descripcion',
    ];

    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }

    public function conceptos()
    {
        return $this->belongsTo('App\Concepto');
    }
}
