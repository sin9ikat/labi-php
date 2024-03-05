<?php

namespace App\DTO;

use App\Enums\LessonContentMediaTypeEnum;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;

class CreateLessonContentDTO extends Data
{
    public function __construct(
        #[WithCast(EnumCast::class,LessonContentMediaTypeEnum::class)]
        public string $media_type,
        public string $value,
        public int $lesson_id,
        public ?string $description = null
    )
    {
    }
}
