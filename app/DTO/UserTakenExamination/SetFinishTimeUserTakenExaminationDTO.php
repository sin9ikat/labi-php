<?php

namespace App\DTO\UserTakenExamination;

use DateTime;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;

class SetFinishTimeUserTakenExaminationDTO extends Data
{
    public function __construct(
        #[WithCast(DateTimeInterfaceCast::class)]
        public DateTime $finished_at)
    {
    }
}
