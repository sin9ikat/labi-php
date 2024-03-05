<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreatePermissionDTO extends Data
{
    public function __construct(
        public string $name,
        public string $guard_name
    )
    {
    }
}
