<?php

namespace App\Enums\Tenant;

enum UserTypeEnum: int
{
    case ADMIN = 1;

    public static function getBy($value): string
    {
           return match ($value) {
               self::ADMIN->value => 'ادمن',
           };
    }
}
