<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEscapeRoomRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',


            'rooms' => 'required|array|min:1',
            'rooms.*.grid' => 'required|array',
            'rooms.*.walls' => 'required|array',
            'rooms.*.wallColor' => 'required|string',
            'rooms.*.wallThickness' => 'required|numeric|min:1',
            'rooms.*.floorColor' => 'nullable|string',
            'rooms.*.floorTexture' => 'nullable|string',
            'rooms.*.floorTextureAssetId' => 'required|integer|exists:assets,id',
            'rooms.*.doorTexture' => 'nullable|string',
            'rooms.*.doorTextureAssetId' => 'required|integer|exists:assets,id',
            'rooms.*.floorAccepted' => 'nullable|boolean',

            'rooms.*.startingPoint' => 'required|array',
            'rooms.*.startingPoint.row' => 'required|integer',
            'rooms.*.startingPoint.col' => 'required|integer',

            'rooms.*.door' => 'required|array',
            'rooms.*.door.row' => 'required|integer',
            'rooms.*.door.col' => 'required|integer',
            'rooms.*.door.rotation' => 'nullable|integer',
            'rooms.*.door.assetId' => 'nullable|integer',

            'rooms.*.riddles' => 'nullable|array',
            'rooms.*.riddles.*.id' => 'nullable|string',
            'rooms.*.riddles.*.position' => 'required|array',
            'rooms.*.riddles.*.position.row' => 'required|integer',
            'rooms.*.riddles.*.position.col' => 'required|integer',
            'rooms.*.riddles.*.type' => 'required|string|in:knowledge,math,language,cypher,puzzleGame',
            'rooms.*.riddles.*.data' => 'required|array',
            'rooms.*.riddles.*.data.title' => 'required|string|max:255',
            'rooms.*.riddles.*.data.question' => 'required|string',
            'rooms.*.riddles.*.data.answer' => 'required|string',
            'rooms.*.riddles.*.data.hints' => 'nullable|array',
            'rooms.*.riddles.*.data.hints.*' => 'string',
            'rooms.*.riddles.*.data.options' => 'nullable|array',
            'rooms.*.riddles.*.assetId' => 'nullable|integer|exists:assets,id',
            'rooms.*.riddles.*.texture' => 'nullable|string',

            'rooms.*.props' => 'nullable|array',
            'rooms.*.props.*.id' => 'nullable|string',
            'rooms.*.props.*.name' => 'required|string|max:255',
            'rooms.*.props.*.imageUrl' => 'nullable|string',
            'rooms.*.props.*.assetId' => 'required|integer|exists:assets,id',
            'rooms.*.props.*.position' => 'required|array',
            'rooms.*.props.*.position.row' => 'required|integer',
            'rooms.*.props.*.position.col' => 'required|integer',
            'rooms.*.props.*.rotation' => 'nullable|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'name.max' => 'Nazwa escape roomu nie może być dłuższa niż 255 znaków.',
            'rooms.required' => 'Przynajmniej jeden pokój jest wymagany.',
            'rooms.min' => 'Przynajmniej jeden pokój jest wymagany.',
            'rooms.*.grid.required' => 'Konfiguracja siatki pokoju jest wymagana.',
            'rooms.*.walls.required' => 'Konfiguracja ścian pokoju jest wymagana.',
            'rooms.*.wallColor.required' => 'Kolor ścian jest wymagany dla każdego pokoju.',
            'rooms.*.wallThickness.required' => 'Grubość ścian jest wymagana dla każdego pokoju.',
            'rooms.*.wallThickness.min' => 'Grubość ścian musi być większa niż 0.',
            'rooms.*.floorTextureAssetId.required' => 'Tekstura podłogi jest wymagana.',
            'rooms.*.floorTextureAssetId.exists' => 'Wybrana tekstura podłogi nie istnieje.',
            'rooms.*.doorTextureAssetId.required' => 'Tekstura drzwi jest wymagana.',
            'rooms.*.doorTextureAssetId.exists' => 'Wybrana tekstura drzwi nie istnieje.',
            'rooms.*.startingPoint.required' => 'Punkt startowy jest wymagany dla każdego pokoju.',
            'rooms.*.door.required' => 'Konfiguracja drzwi jest wymagana dla każdego pokoju.',
            'rooms.*.riddles.*.type.in' => 'Typ zagadki musi być jednym z: knowledge, math, language, cypher, puzzleGame.',
            'rooms.*.riddles.*.data.title.required' => 'Tytuł zagadki jest wymagany.',
            'rooms.*.riddles.*.data.question.required' => 'Pytanie zagadki jest wymagane.',
            'rooms.*.riddles.*.data.answer.required' => 'Odpowiedź zagadki jest wymagana.',
            'rooms.*.props.*.name.required' => 'Nazwa przedmiotu jest wymagana.',
            'rooms.*.props.*.assetId.required' => 'ID zasobu przedmiotu jest wymagane.',
            'rooms.*.props.*.assetId.exists' => 'Wybrany zasób przedmiotu nie istnieje.',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nazwa escape roomu',
            'description' => 'opis escape roomu',
        ];
    }
}