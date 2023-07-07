<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualityRequest extends FormRequest
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
            'sampana' => ['required', 'exists:sampanas,id'],
            'description' => ['required', 'min:6'],
            'picture' => ['required', 'image', 'max:10000'],
            'picture_2' => ['required', 'image', 'max:10000'],
            'picture_3' => ['required', 'image', 'max:10000'],
            'content' => ['required', 'min:3']
            
        ];
    }
}
