<?php

namespace App\DTO\UserTakenExamination;

use App\Enums\TakingCourseStatusTypeEnum;
use App\Enums\TakingExaminationStatusTypeEnum;
use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\LaravelData\Data;

class SetStatusUserTakenExaminationDTO extends Data
{
    public function __construct(
        #[MapFrom(TakingExaminationStatusTypeEnum::class)]
        public TakingExaminationStatusTypeEnum $status)
    {
    }
}
