<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' =>'required|string|min:3|max:80|unique:services,name',
            'description' => 'required|string|min:3',
            'excerpt' => 'required|string|max:200',
            'cover_image' => 'required|image',
            'status_id' =>'required|exists:statuses,id',
            'slug' => 'required|unique:services,slug'
        ];
    }
}
