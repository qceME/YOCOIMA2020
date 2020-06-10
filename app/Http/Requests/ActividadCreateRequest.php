<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActividadCreateRequest extends FormRequest
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
            'titulo'=>['required'],
            'fecha'=>['required'],
            'descripcion'=>['required']
        ];
    }

    public function messages(){
        return [
            'titulo.required'=>'El nombre titulo es Obligatorio',
            'fecha.required'=>'El campo fecha es obligatorio',
            'descripcion.required'=>'El campo descripcion es obligatorio',
        ];
    }
}
