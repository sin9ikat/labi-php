<?php

namespace App\DTO;

use App\Enums\QuestionTypeEnum;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;

class CreateQuestionDTO extends Data
{
    public function __construct(
        public string $question,
        #[WithCast(EnumCast::class, QuestionTypeEnum::class)]
        public string $type,
        public int $priority,
        public bool $required,
        public int $question_group_id
    )
    {
    }
}
