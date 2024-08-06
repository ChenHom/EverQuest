<?php
namespace App\Enums;

trait traitCommonFunction
{
    public static function valueToArray(): array
    {
        return array_column(static::cases(), 'value');
    }
}
