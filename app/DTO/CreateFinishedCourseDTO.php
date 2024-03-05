<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateFinishedCourseDTO extends Data
{
    public function __construct(
        public int $user_id,
        public int $course_id
    )
    {
    }
}
