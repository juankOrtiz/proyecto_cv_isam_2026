<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreArchivoRequest extends FormRequest
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
            // Validamos que el archivo sea una imagen, solamente con las extensiones habilitadas y que tenga como maximo 2 MB de tamanio
            "archivo" => ["image", "mimes:jpeg,jpg,png,webp", "max:2048"]
        ];
    }
}
