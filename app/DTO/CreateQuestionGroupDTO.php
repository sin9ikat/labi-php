<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateQuestionGroupDTO extends Data
{
    public function __construct(
        public string $title,
        public int $priority,
        public int $examination_id,
    )
    {
    }
}
