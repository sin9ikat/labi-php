<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class UpdateUserProgressDTO extends Data
{
    public function __construct(
        public int $lesson_id,
        public bool $finished
    )
    {
    }
}
