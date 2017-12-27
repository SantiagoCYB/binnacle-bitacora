<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformesFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'descripcion'=>'required|max:500',
        ];
    }
}
