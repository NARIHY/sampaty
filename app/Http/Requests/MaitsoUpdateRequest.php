<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaitsoUpdateRequest extends FormRequest
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
            'title' => ['required', 'min:3'],
            'content' => ['required', 'min:8'],
            'image' => ['image', 'max:10000'],
            'image_2' => ['image', 'max:10000'],
            'image_3' => ['image', 'max:10000'],
            'info' => ['required']
        ];
    }
}
