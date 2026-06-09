<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProyectoRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "titulo" => ['required', 'min:3', 'max:100'],
            "descripcion" => ['required', 'min:10'],
            "etiquetas" => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'El titulo es obligatorio',
        ];
    }
}
