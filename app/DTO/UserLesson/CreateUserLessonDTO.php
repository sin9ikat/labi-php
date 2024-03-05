<?php

namespace App\DTO\UserLesson;

use DateTime;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;

class CreateUserLessonDTO extends Data
{
    public function __construct(
        public int $user_id,
        public int $lesson_id,
        #[WithCast(DateTimeInterfaceCast::class)]
        public DateTime $started_at)
    {
    }
}
