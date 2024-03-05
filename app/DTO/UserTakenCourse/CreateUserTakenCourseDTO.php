<?php

namespace App\DTO\UserTakenCourse;

use Spatie\LaravelData\Data;

class CreateUserTakenCourseDTO extends Data
{
    public function __construct(
        public int $user_id,
        public int $course_id,
        public int $lesson_id,
        public string $status)
    {
    }
}
