<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateQuestionResponseDTO extends Data
{
    public function __construct(
        public string $answer,
        public bool $correct,
        public bool $enabled,
        public int $question_id
    )
    {
    }
}
