<?php

namespace App\Http\Services;

use App\Models\Examination;
use App\Models\QuestionGroup;
use App\Repositories\Interfaces\QuestionGroupRepositoryInterface;
use Illuminate\Support\Collection;

class QuestionGroupService extends BaseService
{
    /**
     * @param QuestionGroupRepositoryInterface $repository
     */
    public function __construct(QuestionGroupRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param Examination $examination
     * @return Collection
     */
    public function getQuestionGroupsWithPriorityByExamination(Examination $examination): Collection
    {
        return $this->repository->where(['examination_id' => $examination->id],'priority','asc');
    }

    /**
     * @param Collection $questionGroups
     * @param QuestionGroup $questionGroup
     * @return bool
     */
    public function isLastQuestionGroup(Collection $questionGroups, QuestionGroup $questionGroup): bool
    {
        return $questionGroup->priority == $questionGroups->count();
    }


}
