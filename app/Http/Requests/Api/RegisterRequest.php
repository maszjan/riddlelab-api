<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'player_configuration.avatar.skin_color' => ['required', 'regex:/^#([A-Fa-f0-9]{6})$/'],
            'player_configuration.avatar.hair_color' => ['required', 'regex:/^#([A-Fa-f0-9]{6})$/'],
            'player_configuration.avatar.eye_color' => ['required', 'regex:/^#([A-Fa-f0-9]{6})$/'],
            'player_configuration.avatar.outfit_color' => ['required', 'regex:/^#([A-Fa-f0-9]{6})$/'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nazwa użytkownika jest wymagana.',
            'name.max' => 'Nazwa użytkownika może zawierać maksymalnie 255 znaków.',
            'email.required' => 'Adres email jest wymagany.',
            'email.email' => 'Podany adres email jest nieprawidłowy.',
            'email.unique' => 'Podany adres email jest już zajęty.',
            'password.required' => 'Hasło jest wymagane.',
            'password.min' => 'Hasło musi zawierać co najmniej 8 znaków.',
            'password.confirmed' => 'Potwierdzenie hasła nie zgadza się.',
            'password.mixed' => 'Hasło musi zawierać co najmniej jedną małą i jedną dużą literę.',
            'password.numbers' => 'Hasło musi zawierać co najmniej jedną cyfrę.',
            'password.symbols' => 'Hasło musi zawierać co najmniej jeden znak specjalny.',
            'player_configuration.avatar.skin_color.required' => 'Kolor skóry jest wymagany.',
            'player_configuration.avatar.skin_color.regex' => 'Kolor skóry musi być w formacie HEX (np. #FF5733).',
            'player_configuration.avatar.hair_color.required' => 'Kolor włosów jest wymagany.',
            'player_configuration.avatar.hair_color.regex' => 'Kolor włosów musi być w formacie HEX (np. #FF5733).',
            'player_configuration.avatar.eye_color.required' => 'Kolor oczu jest wymagany.',
            'player_configuration.avatar.eye_color.regex' => 'Kolor oczu musi być w formacie HEX (np. #FF5733).',
            'player_configuration.avatar.outfit_color.required' => 'Kolor stroju jest wymagany.',
            'player_configuration.avatar.outfit_color.regex' => 'Kolor stroju musi być w formacie HEX (np. #FF5733).',
        ];
    }
}
