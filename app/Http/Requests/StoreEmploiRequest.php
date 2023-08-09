<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmploiRequest extends FormRequest
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
            'structure_name' => 'required|min:3|max:255|string',
            'structure_email' => 'required|email|max:255',
            'structure_tel' => 'required',
            'structure_ifu' => 'required | digits:13 | regex:/^[0-9]{13}$/ |numeric',
            'structure_logo' => 'image',
            'structure_lien_facebook' => 'url',
            'structure_lien_github' => 'url',
            'structure_lien_linkedin' => 'url',
            'libelle' => 'required',
            'description' => 'required',
            'ville_id' => 'required',
        ];
    }
}
