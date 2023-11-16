<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePracticanteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'codigo_estudiante' => 'required|max:15',
            'escuela_id' => 'required|integer|exists:escuelas,id',
            'telefono' => 'nullable|numeric'
        ];
    }

    public function attributes()
    {
        return [
            'codigo_estudiante' => 'código del estudiante',
            'escuela_id' => 'escuela'
        ];
    }
}
