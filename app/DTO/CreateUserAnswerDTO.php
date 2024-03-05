<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateUserAnswerDTO extends Data
{
    public function __construct(
        public int $user_id,
        public int $question_id,
        public int $question_response_id,
        public string $taken_examination_id,
        public ?string $value = null
    )
    {
    }
}
