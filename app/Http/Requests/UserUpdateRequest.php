<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

use App\Models\User;
class UserUpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'prenon' => ['required', 'string', 'max:255'],
            'picture' => ['image', 'max:10000'],
            'genre' => ['required'],
            'addresse' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)->ignore(auth()->id())],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ];
    }
}
