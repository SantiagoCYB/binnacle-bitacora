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
            'codigo'=>'required|max:30',
            'nombre'=>'required|max:255',
            'descripcion'=>'required|max:500',
        ];
    }
}
