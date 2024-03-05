<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateUserProgressDTO extends Data
{
    public function __construct(
        public int $user_id,
        public int $author_id,
        public int $lesson_id,
        public int $course_id,
        public ?bool $finished = false
    )
    {
    }
}
