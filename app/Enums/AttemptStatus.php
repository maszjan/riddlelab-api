<?php

namespace App\Enums;

enum AttemptStatus: string
{
    case Paused = 'paused';
    case Abandoned = 'abandoned';
    case Active = 'active';
    case Completed = 'completed';

    case Failed = 'failed';

    public static function values(): array
    {
          return array_column(self::cases(), 'value');
    }

    public static function hasValue(string $value): bool
    {
        return in_array($value, self::values());
    }
}
