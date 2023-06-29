<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'lastname' => 'required|string|min:3',
            'firstname' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'required|phone:BJ',
            'age' => 'required|numeric|min:16',
            'picture' => 'image',
            'biography' => 'required',
            'cv_path' => 'required|file',
        ];
    }
}
