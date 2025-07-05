<?php


namespace Database\Seeders;

use App\Models\Riddle;
use App\Models\User;
use App\Enums\RiddleType;
use Illuminate\Database\Seeder;

class RiddleSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        
        $riddles = [
            [
                'name' => 'Matematyczna Zagadka',
                'type' => RiddleType::Math,
                'question' => 'Jeśli mam 10 jabłek i dam połowę mojemu przyjacielowi, ile jabłek zostanie mi?',
                'answer' => '5',
            ],
            [
                'name' => 'Logiczna Łamigłówka',
                'type' => RiddleType::Knowledge, // Changed from Logic to Knowledge
                'question' => 'Co ma 4 nogi rano, 2 w południe i 3 wieczorem?',
                'answer' => 'człowiek',
            ],
            [
                'name' => 'Sekretny Kod',
                'type' => RiddleType::Cypher, // Changed from Code to Cypher
                'question' => 'Rozszyfruj: 20-8-5 3-15-4-5 9-19: A=1, B=2, C=3...',
                'answer' => 'THE CODE IS',
            ],
            [
                'name' => 'Słowna Zagadka',
                'type' => RiddleType::Language, // Changed from Word to Language
                'question' => 'Jestem pełen dziur, ale mogę trzymać wodę. Kim jestem?',
                'answer' => 'gąbka',
            ],
            [
                'name' => 'Kolorowa Zagadka',
                'type' => RiddleType::Knowledge, // Changed from Logic to Knowledge
                'question' => 'Jakiego koloru jest biały koń Napoleona?',
                'answer' => 'biały',
            ],
            [
                'name' => 'Cyfry i Liczby',
                'type' => RiddleType::Math,
                'question' => 'Jaka liczba pomnożona przez siebie daje 64?',
                'answer' => '8',
            ],
            [
                'name' => 'Starożytna Mądrość',
                'type' => RiddleType::Knowledge, // Changed from Logic to Knowledge
                'question' => 'Co jest cięższe: kilogram pierza czy kilogram ołowiu?',
                'answer' => 'tyle samo',
            ],
            [
                'name' => 'Kosmiczna Zagadka',
                'type' => RiddleType::Knowledge, // Changed from Code to Knowledge
                'question' => 'Ile planet jest w naszym układzie słonecznym?',
                'answer' => '8',
            ],
            [
                'name' => 'Językowa Łamigłówka',
                'type' => RiddleType::Language,
                'question' => 'Jakie słowo brzmi tak samo napisane od przodu i od tyłu?',
                'answer' => 'kajak',
            ],
            [
                'name' => 'Puzzle Gra',
                'type' => RiddleType::PuzzleGame,
                'question' => 'Ułóż liczby 1-9 w kwadracie 3x3 tak, aby suma w każdym rzędzie, kolumnie i przekątnej wynosiła 15.',
                'answer' => '294753618',
            ],
            [
                'name' => 'Tajny Szyfr',
                'type' => RiddleType::Cypher,
                'question' => 'ROT13: Uryyb Jbeyq!',
                'answer' => 'Hello World',
            ],
        ];

        foreach ($riddles as $riddleData) {
            Riddle::create([
                'creator_id' => $users->random()->id,
                'name' => $riddleData['name'],
                'type' => $riddleData['type'],
                'question' => $riddleData['question'],
                'answer' => $riddleData['answer'],
            ]);
        }
    }
}