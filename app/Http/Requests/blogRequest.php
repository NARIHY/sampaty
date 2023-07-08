<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class blogRequest extends FormRequest
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
            "title" => ['required', 'min:3'],
            'category' => ['required', 'exists:sampanas,id'],
            'slug' => ['required', 'min:6'],
            'image' => ['image', 'max:10000'],
            'picture_2' => ['image', 'max:10000'],
            'content' => ['required', 'min:3']
        ];
    }
}
