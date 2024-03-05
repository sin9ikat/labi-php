<?php

namespace App\DTO\UserTakenExamination;

use Spatie\LaravelData\Data;

class UpdateQuestionGroupIdUserTakenExaminationDTO extends Data
{
    public function __construct(
        public int $question_group_id,
    )
    {
    }
}
