<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFormationRequest extends FormRequest
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
            'name' => '',
            'slug' => '',
            'dateDebut' => '',
            'dateFin' => '',
            'presentation' => '',
            'objectif' => '',
            'public' => '',
            'avantage' => '',
            'modalite' => '',
            'cover_image' => '',
            'categoryForm_id' => '',
            'price' => 'required|integer',
            'status_id' => 'required|integer',

        ];
    }
}
