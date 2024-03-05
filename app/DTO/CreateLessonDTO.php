<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateLessonDTO extends Data
{
    public function __construct(
        public string $title,
        public string $slug,
        public string $description,
        public int $course_id,
        public int $priority
    )
    {
    }
}
