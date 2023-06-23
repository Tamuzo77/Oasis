<?php

namespace App\Http\Requests;

use App\Models\Actualite;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateActusRequest extends FormRequest
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
         $actu = new Actualite();
        return [
            //
            'title' => 'required|min:3',
            'content' => 'required|min:3',
            'status_id' => 'required|exists:statuses,id',
            'categoryNew_id' => 'required|exists:category_news,id',
            'cover_image' => $actu->exists ?['cover_image'] : 'image',
            'slug' => 'required|',
            'author' => 'required',
        ];
    }
}
