<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateCourseWithoutCategoriesDTO extends Data
{
    public function __construct(
        public string $title,
        public int $user_id,
    )
    {
    }
}
