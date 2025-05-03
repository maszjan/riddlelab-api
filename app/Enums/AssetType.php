<?php

namespace App\Enums;

enum AssetType: string
{
    case Prop = 'prop';
    case Door = 'door';
    case Floor = 'floor';
    case Riddle = 'riddle';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function hasValue(string $value): bool
    {
        return in_array($value, self::values());
    }
}
