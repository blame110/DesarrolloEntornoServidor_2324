<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAlumnosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //Importante, por defecto es falso
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:50',
            'apellidos' => 'required|string|max:250',
            'edad' => 'required|integer|min:1|max:100',
            'nota' => 'required|integer|min:1|max:10',
            'descripcion' => 'nullable|string'
        ];
    }
}
