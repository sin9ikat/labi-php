<?php

namespace App\Enums;

enum LessonContentMediaTypeEnum: string
{
    case VIDEO = 'video';
    case IMAGE = 'image';
    case TEXT = 'text';

    public function title(): string
    {
        return match($this) {
            self::VIDEO => 'Видео',
            self::IMAGE => 'Изображение',
            self::TEXT => 'Текст'
        };
    }

    public static function toArray(): array
    {
        return array_map(fn($res) => $res->value, self::cases());
    }
}
