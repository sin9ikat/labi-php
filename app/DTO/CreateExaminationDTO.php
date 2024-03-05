<?php

namespace App\DTO;

use App\Enums\ExaminationTypeEnum;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;

class CreateExaminationDTO extends Data
{
    public function __construct(
        public string $title,
        public int $lesson_id,
    )
    {
    }
}
