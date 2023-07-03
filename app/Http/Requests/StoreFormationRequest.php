<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormationRequest extends FormRequest
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
            'name' => 'required|string',
            'slug' => '',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date',
            'presentation' => 'required|string',
            'objectif' => 'required|string',
            'public' => 'required|string',
            'avantage' => 'required|string',
            'modalite' => 'required|string',
            'cover_image' => 'required|image',
            'categoryForm_id' => 'exists:category_forms,id',
        ];
    }
}
