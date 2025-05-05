<?php

namespace App\Enums;

enum UserRole: string
{
    case User = 'user';
    case Moderator = 'moderator';
    case Admin = 'admin';
    case Premium = 'premium';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function hasValue(string $value): bool
    {
        return in_array($value, self::values());
    }

    public function getAssetLimit(): int
    {
        return match($this) {
            self::Admin, self::Moderator => 100000,
            self::Premium => 100,
            self::User => 10,
        };
    }
}
