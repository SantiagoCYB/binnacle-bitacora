<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConceptosFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'documento'=>'required|max:255',
            'nombre'=>'required|max:255',
            'codigo'=>'required|max:30',
            'detalle'=>'required|max:255',
            'descripcion'=>'required|max:500',
        ];
    }
}
