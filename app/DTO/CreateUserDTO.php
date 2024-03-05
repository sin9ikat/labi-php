<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CreateUserDTO extends Data
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    )
    {
    }
}
