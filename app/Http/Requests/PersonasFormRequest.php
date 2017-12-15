<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonasFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'documento'=>'required|max:255',
            'apellidos'=>'required|max:255',
            'nombre'=>'required|max:255',
            'direccion'=>'required|max:255',
            'genero'=>'required|max:255',
        ];
    }
}
