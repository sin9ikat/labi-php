<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreUserRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string | required | max:255',
            'email' => 'email | required',
            'password' => 'string  | required | max:70',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'email_verified_at' => now(),
            'remember_token' => Str::random(30)
        ]);
    }
}
