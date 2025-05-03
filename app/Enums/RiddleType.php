<?php

namespace App\Enums;

enum RiddleType: string
{
    case Knowledge = 'knowledge';
    case Math = 'math';
    case Language = 'language';
    case Cypher = 'cypher';
    case PuzzleGame = 'puzzleGame';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function hasValue(string $value): bool
    {
        return in_array($value, self::values());
    }
}
