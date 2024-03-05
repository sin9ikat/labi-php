<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateCourseDTO extends Data
{
    public function __construct(
        public string $title,
        public int $user_id,
        public ?array $category_id = null
    )
    {
    }
}
