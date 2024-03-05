<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateCommentDTO extends Data
{
    public function __construct(
        public int $user_id,
        public string $description,
        public int $lesson_id,
    )
    {
    }
}
