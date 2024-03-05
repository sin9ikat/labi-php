<?php

namespace App\DTO\UserTakenExamination;

use App\Enums\TakingExaminationStatusTypeEnum;
use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\LaravelData\Data;

class CreateUserTakenExaminationDTO extends Data
{
    public function __construct(
        public int $user_id,
        public int $examination_id,
        public int $question_group_id,
        #[MapFrom(TakingExaminationStatusTypeEnum::class)]
        public TakingExaminationStatusTypeEnum $status = TakingExaminationStatusTypeEnum::LOGGED,
    )
    {
    }
}
