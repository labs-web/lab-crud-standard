<?php

namespace App\Http\Requests\projets;

use Illuminate\Foundation\Http\FormRequest;
class projetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|max:40',
            'description' => 'required',
            'date_debut' => 'required',
            'date_de_fin' => 'required',
        ];
    }
}