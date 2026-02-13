<?php

namespace App\Enums;

enum MiniGameType: string
{
    case PatternMemory = 'pattern_memory';
    case CircuitPuzzle = 'circuit_puzzle';
    case LaserPuzzle = 'laser_puzzle';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function hasValue(string $value): bool
    {
        return in_array($value, self::values());
    }

    public function label(): string
    {
        return match($this) {
            self::PatternMemory => 'Simon Says / Sekwencja pamięci',
            self::CircuitPuzzle => 'Obwód elektryczny',
            self::LaserPuzzle => 'Ścieżka lasera',
        };
    }

    public function description(): string
    {
        return match($this) {
            self::PatternMemory => 'Powtórz sekwencję kolorów',
            self::CircuitPuzzle => 'Połącz obwód od baterii do LED',
            self::LaserPuzzle => 'Skieruj wiązkę lasera do celu',
        };
    }

    public function estimatedTime(): int
    {
        return match($this) {
            self::PatternMemory => 60,
            self::CircuitPuzzle => 120,
            self::LaserPuzzle => 90
        };
    }
}
