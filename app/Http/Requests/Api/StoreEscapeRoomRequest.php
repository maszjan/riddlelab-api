<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StoreEscapeRoomRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail' => 'nullable|file|image|max:5120',
            'soundtrack' => 'nullable|file|mimes:mp3,wav,m4a|max:10240',

            'rooms' => 'required|array|min:1',
            'rooms.*.grid' => 'required|array',
            'rooms.*.walls' => 'required|array',
            'rooms.*.wallColor' => 'required|string',
            'rooms.*.wallThickness' => 'required|numeric|min:1',
            'rooms.*.floorTexture' => 'nullable|string',
            'rooms.*.floorTextureAssetId' => 'nullable|integer|exists:assets,id',
            'rooms.*.doorTexture' => 'nullable|string',
            'rooms.*.doorTextureAssetId' => 'nullable|integer|exists:assets,id',
            'rooms.*.floorAccepted' => 'nullable|boolean',

            // Starting point validation
            'rooms.*.startingPoint' => 'required|array',
            'rooms.*.startingPoint.row' => 'required|integer',
            'rooms.*.startingPoint.col' => 'required|integer',

            // Door validation
            'rooms.*.door' => 'required|array',
            'rooms.*.door.row' => 'required|integer',
            'rooms.*.door.col' => 'required|integer',
            'rooms.*.door.rotation' => 'nullable|integer',

            // Riddles validation
            'rooms.*.riddles' => 'nullable|array',
            'rooms.*.riddles.*.id' => 'nullable|string',
            'rooms.*.riddles.*.position' => 'required|array',
            'rooms.*.riddles.*.position.row' => 'required|integer',
            'rooms.*.riddles.*.position.col' => 'required|integer',
            'rooms.*.riddles.*.type' => 'required|string|in:knowledge,math,logic,pattern,word_puzzle',
            'rooms.*.riddles.*.data' => 'required|array',
            'rooms.*.riddles.*.data.title' => 'required|string|max:255',
            'rooms.*.riddles.*.data.question' => 'required|string',
            'rooms.*.riddles.*.data.answer' => 'required|string',
            'rooms.*.riddles.*.data.hints' => 'nullable|array',
            'rooms.*.riddles.*.data.hints.*' => 'string',
            'rooms.*.riddles.*.data.options' => 'nullable|array',
            'rooms.*.riddles.*.assetId' => 'nullable|integer|exists:assets,id',
            'rooms.*.riddles.*.texture' => 'nullable|string',

            // Props validation
            'rooms.*.props' => 'nullable|array',
            'rooms.*.props.*.id' => 'nullable|string',
            'rooms.*.props.*.name' => 'required|string|max:255',
            'rooms.*.props.*.imageUrl' => 'nullable|string',
            'rooms.*.props.*.assetId' => 'required|integer|exists:assets,id',
            'rooms.*.props.*.position' => 'required|array',
            'rooms.*.props.*.position.row' => 'required|integer',
            'rooms.*.props.*.position.col' => 'required|integer',
            'rooms.*.props.*.rotation' => 'nullable|integer',
            'rooms.*.props.*.hasCollider' => 'nullable|boolean',
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nazwa escape roomu jest wymagana.',
            'name.max' => 'Nazwa escape roomu nie może być dłuższa niż 255 znaków.',
            'description.required' => 'Opis escape roomu jest wymagany.',
            'rooms.required' => 'Przynajmniej jeden pokój jest wymagany.',
            'rooms.min' => 'Przynajmniej jeden pokój jest wymagany.',
            'rooms.*.grid.required' => 'Konfiguracja siatki pokoju jest wymagana.',
            'rooms.*.walls.required' => 'Konfiguracja ścian pokoju jest wymagana.',
            'rooms.*.wallColor.required' => 'Kolor ścian jest wymagany dla każdego pokoju.',
            'rooms.*.wallThickness.required' => 'Grubość ścian jest wymagana dla każdego pokoju.',
            'rooms.*.wallThickness.min' => 'Grubość ścian musi być większa niż 0.',
            'rooms.*.startingPoint.required' => 'Punkt startowy jest wymagany dla każdego pokoju.',
            'rooms.*.startingPoint.row.required' => 'Wiersz punktu startowego jest wymagany.',
            'rooms.*.startingPoint.col.required' => 'Kolumna punktu startowego jest wymagana.',
            'rooms.*.door.required' => 'Konfiguracja drzwi jest wymagana dla każdego pokoju.',
            'rooms.*.door.row.required' => 'Wiersz drzwi jest wymagany.',
            'rooms.*.door.col.required' => 'Kolumna drzwi jest wymagana.',

            // Riddles messages
            'rooms.*.riddles.*.type.required' => 'Typ zagadki jest wymagany.',
            'rooms.*.riddles.*.type.in' => 'Typ zagadki musi być jednym z: knowledge, math, logic, pattern, word_puzzle.',
            'rooms.*.riddles.*.position.required' => 'Pozycja zagadki jest wymagana.',
            'rooms.*.riddles.*.position.row.required' => 'Wiersz pozycji zagadki jest wymagany.',
            'rooms.*.riddles.*.position.col.required' => 'Kolumna pozycji zagadki jest wymagana.',
            'rooms.*.riddles.*.data.required' => 'Dane zagadki są wymagane.',
            'rooms.*.riddles.*.data.title.required' => 'Tytuł zagadki jest wymagany.',
            'rooms.*.riddles.*.data.title.max' => 'Tytuł zagadki nie może być dłuższy niż 255 znaków.',
            'rooms.*.riddles.*.data.question.required' => 'Pytanie zagadki jest wymagane.',
            'rooms.*.riddles.*.data.answer.required' => 'Odpowiedź zagadki jest wymagana.',
            'rooms.*.riddles.*.assetId.exists' => 'Wybrany zasób zagadki nie istnieje.',

            // Props messages
            'rooms.*.props.*.name.required' => 'Nazwa przedmiotu jest wymagana.',
            'rooms.*.props.*.name.max' => 'Nazwa przedmiotu nie może być dłuższa niż 255 znaków.',
            'rooms.*.props.*.assetId.required' => 'ID zasobu przedmiotu jest wymagane.',
            'rooms.*.props.*.assetId.exists' => 'Wybrany zasób przedmiotu nie istnieje.',
            'rooms.*.props.*.position.required' => 'Pozycja przedmiotu jest wymagana.',
            'rooms.*.props.*.position.row.required' => 'Wiersz pozycji przedmiotu jest wymagany.',
            'rooms.*.props.*.position.col.required' => 'Kolumna pozycji przedmiotu jest wymagana.',

            // Asset validations
            'rooms.*.floorTextureAssetId.exists' => 'Wybrany zasób tekstury podłogi nie istnieje.',
            'rooms.*.doorTextureAssetId.exists' => 'Wybrany zasób tekstury drzwi nie istnieje.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name' => 'nazwa escape roomu',
            'description' => 'opis escape roomu',
            'rooms.*.wallColor' => 'kolor ścian',
            'rooms.*.wallThickness' => 'grubość ścian',
            'rooms.*.startingPoint.row' => 'wiersz punktu startowego',
            'rooms.*.startingPoint.col' => 'kolumna punktu startowego',
            'rooms.*.door.row' => 'wiersz drzwi',
            'rooms.*.door.col' => 'kolumna drzwi',
        ];
    }
}
