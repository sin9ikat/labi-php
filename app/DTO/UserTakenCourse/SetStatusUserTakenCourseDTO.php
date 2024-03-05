<?php

namespace App\DTO\UserTakenCourse;

use App\Enums\TakingCourseStatusTypeEnum;
use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\LaravelData\Data;

class SetStatusUserTakenCourseDTO extends Data
{
    public function __construct(
        #[MapFrom(TakingCourseStatusTypeEnum::class)]
        public TakingCourseStatusTypeEnum $status)
    {
    }
}
