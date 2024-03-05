<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class SetFinishedUserProgressDTO extends Data
{
    public function __construct(
        public bool $finished
    )
    {
    }
}
