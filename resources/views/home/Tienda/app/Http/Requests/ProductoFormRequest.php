<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nombre'=>'required|max:50',
          'slug'=>'required|max:100',
           'descripcion'=>'required|max:100',
           'extracto'=>'required|max:100',
           'caracteristicas'=>'required|max:500',
          'precio'=>'required|numeric',
            'imagen'=>'required|max:50',



        ];
    }
}
