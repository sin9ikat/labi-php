<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateScaleCriteriaDTO extends Data
{
    public function __construct(
        public string $title,
        public string $text,
        public int $examination_id,
    )
    {
    }
}
