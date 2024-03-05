<?php

namespace App\Http\Services;

use App\DTO\UserTakenExamination\SetFinishTimeUserTakenExaminationDTO;
use App\DTO\UserTakenExamination\SetStartTimeUserTakenExaminationDTO;
use App\DTO\UserTakenExamination\SetStatusUserTakenExaminationDTO;
use App\DTO\UserTakenExamination\UpdateQuestionGroupIdUserTakenExaminationDTO;
use App\Enums\TakingExaminationStatusTypeEnum;
use App\Models\User;
use App\Models\UserTakenExamination;
use App\Repositories\Interfaces\UserTakenExaminationRepositoryInterface;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;

class UserTakenExaminationService extends BaseService
{
    /**
     * @param UserTakenExaminationRepositoryInterface $repository
     */
    public function __construct(UserTakenExaminationRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param string $user_id
     * @param string $examination_id
     * @return JsonResource
     */
    public function findByUserIdAndExaminationId(string $user_id, string $examination_id): JsonResource
    {
        return new JsonResource($this->repository->where(['user_id' => $user_id, 'examination_id' => $examination_id])->where('status','!=',TakingExaminationStatusTypeEnum::FAILED)->first());
    }

    /**
     * @param UserTakenExamination $userTakenExamination
     * @return void
     */
    public function setInProcessStatus(UserTakenExamination $userTakenExamination): void
    {
        $this->repository->updateById($userTakenExamination->id, new SetStatusUserTakenExaminationDTO(TakingExaminationStatusTypeEnum::IN_PROCESS));
    }

    /**
     * @param UserTakenExamination $userTakenExamination
     * @return void
     */
    public function setLoggedStatus(UserTakenExamination $userTakenExamination): void
    {
        $this->repository->updateById($userTakenExamination->id, new SetStatusUserTakenExaminationDTO(TakingExaminationStatusTypeEnum::LOGGED));
    }

    /**
     * @param UserTakenExamination $userTakenExamination
     * @return void
     */
    public function setFinishStatus(UserTakenExamination $userTakenExamination): void
    {
        $this->repository->updateById($userTakenExamination->id, new SetStatusUserTakenExaminationDTO(TakingExaminationStatusTypeEnum::FINISHED));
    }

    public function setFailedStatus(UserTakenExamination $userTakenExamination): void
    {
        $this->repository->updateById($userTakenExamination->id, new SetStatusUserTakenExaminationDTO(TakingExaminationStatusTypeEnum::FAILED));
    }

    /**
     * @param UserTakenExamination $userTakenExamination
     * @return void
     */
    public function setStartedTime(UserTakenExamination $userTakenExamination): void
    {
        $this->repository->updateById($userTakenExamination->id, new SetStartTimeUserTakenExaminationDTO(Carbon::now()));
    }

    /**
     * @param UserTakenExamination $userTakenExamination
     * @return void
     */
    public function setFinishedTime(UserTakenExamination $userTakenExamination): void
    {
        $this->repository->updateById($userTakenExamination->id, new SetFinishTimeUserTakenExaminationDTO(Carbon::now()));
    }

    /**
     * @param Collection $data
     * @return Collection
     */
    public function addCompletionTime(Collection $data): Collection
    {
        foreach ($data as $entity)
        {
            if ($entity->lesson->examinations->first())
            {
                $userExamination = $this->findByUserIdAndExaminationId($entity->user_id,
                    $entity->lesson->examinations->first()->id);

                if ($userExamination->resource)
                {
                    $finished_time = Carbon::parse($userExamination->finished_at);
                    $started_time = Carbon::parse($userExamination->started_at);
                    $entity->setAttribute('completion_time',
                        $finished_time->locale('ru')->diffForHumans($started_time, CarbonInterface::DIFF_ABSOLUTE, true,
                            3));
                }
            }
        }
        return $data;
    }

    /**
     * @param Collection $questionGroups
     * @param UserTakenExamination $examination
     * @return void
     */
    public function updateToNext(Collection $questionGroups, UserTakenExamination $examination): void
    {
        $questionGroups = $questionGroups->getIterator();

        while($questionGroups->current()->id != $examination->question_group_id)
            $questionGroups->next();

        $questionGroups->next();

        $this->repository->updateById($examination->id, new UpdateQuestionGroupIdUserTakenExaminationDTO($questionGroups->current()->id));
    }

    /**
     * @param Data $data
     * @param Collection $questions
     * @return void
     */
    public function createAndAttachQuestions(Data $data, Collection $questions): void
    {
        $this->create($data)->resource->questions()->attach($questions);
    }

    /**
     * @param UserTakenExamination $takenExamination
     * @param Collection $questions
     * @return void
     */
    public function attachQuestions(UserTakenExamination $takenExamination, Collection $questions): void
    {
        $takenExamination->questions()->attach($questions);
    }
}
