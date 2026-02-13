<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:door,floor,prop,riddle',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048|dimensions:width=64,height=64',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nazwa jest wymagana',
            'name.max' => 'Nazwa może mieć maksymalnie 255 znaków',
            'type.required' => 'Typ zasobu jest wymagany',
            'type.in' => 'Nieprawidłowy typ zasobu',
            'image.required' => 'Obraz jest wymagany',
            'image.image' => 'Plik musi być obrazem',
            'image.mimes' => 'Obraz musi być w formacie PNG',
            'image.max' => 'Obraz nie może być większy niż 2MB',
            'image.dimensions' => 'Obraz musi mieć wymiary dokładnie 64x64 pikseli',
        ];
    }
}
