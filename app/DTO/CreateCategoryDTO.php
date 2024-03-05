<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateCategoryDTO extends Data
{
    public function __construct(
        public string $name,
        public string $slug,
        public string $description,
        public ?int $parent_id = null,
    )
    {
    }
}
