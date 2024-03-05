<?php

namespace App\DTO\UserTakenCourse;

use Spatie\LaravelData\Data;

class UpdateLessonUserTakenCourseDTO extends Data
{
    public function __construct(
        public int $lesson_id,
        public string $status = 'on_course'
    )
    {
    }
}
