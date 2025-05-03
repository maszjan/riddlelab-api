<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Adres email jest wymagany.',
            'email.email' => 'Podany adres email jest nieprawidłowy.',
            'password.required' => 'Hasło jest wymagane.',
        ];
    }
}
