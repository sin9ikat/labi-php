<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateRoleDTO extends Data
{
    public function __construct(
        public string $name,
        public string $guard_name
    )
    {
    }
}
