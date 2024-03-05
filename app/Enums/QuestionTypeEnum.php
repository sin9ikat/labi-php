<?php

namespace App\Enums;

enum QuestionTypeEnum: int
{
    case INPUT = 1;
    case RADIO = 2;

    public function title(): string
    {
        return match($this){
            self::INPUT => 'Поле для ввода',
            self::RADIO => 'Один из списка'
        };
    }

    public static function toArray(): array
    {
        return array_map(fn($res) => $res->value, self::cases());
    }
}
