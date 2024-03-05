<?php

namespace App\Http\Services;

use App\DTO\UpdateUserProgressDTO;
use App\DTO\UserTakenCourse\SetStatusUserTakenCourseDTO;
use App\DTO\UserTakenCourse\UpdateLessonUserTakenCourseDTO;
use App\Enums\TakingCourseStatusTypeEnum;
use App\Models\UserTakenCourse;
use App\Repositories\Interfaces\ScaleCriteriaRepositoryInterface;
use App\Repositories\Interfaces\UserTakenCourseRepositoryInterface;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;
use function Laravel\Prompts\warning;

class UserTakenCourseService extends BaseService
{
    /**
     * @param UserTakenCourseRepositoryInterface $repository
     */
    public function __construct(UserTakenCourseRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param UserTakenCourse $takenCourse
     * @param Collection $lessons
     * @return void
     */
    public function updateToNext(UserTakenCourse $takenCourse, Collection $lessons): void
    {
        $lessons = $lessons->getIterator();

        while($lessons->current()->id !== $takenCourse->lesson_id)
            $lessons->next();

        if($lessons->current() == end($lessons))
            $this->setFinishRequestStatus($takenCourse);

        $lessons->next();
        parent::updateById($takenCourse->id, new UpdateLessonUserTakenCourseDTO($lessons->current()->id));
    }

    /**
     * @param UserTakenCourse $takenCourse
     * @return void
     */
    public function setFinishRequestStatus(UserTakenCourse $takenCourse): void
    {
        parent::updateById($takenCourse->id, new SetStatusUserTakenCourseDTO(TakingCourseStatusTypeEnum::FINISH_REQUEST));
    }

    public function setFinishStatus(UserTakenCourse $takenCourse)
    {
        parent::updateById($takenCourse->id, new SetStatusUserTakenCourseDTO(TakingCourseStatusTypeEnum::FINISHED));
    }

    public function setOnCourseStatus(UserTakenCourse $takenCourse)
    {
        parent::updateById($takenCourse->id, new SetStatusUserTakenCourseDTO(TakingCourseStatusTypeEnum::ON_COURSE));
    }

    public function setTestingStatus(UserTakenCourse $takenCourse): void
    {
        parent::updateById($takenCourse->id, new SetStatusUserTakenCourseDTO(TakingCourseStatusTypeEnum::TESTING));
    }

    /**
     * @param string $course_id
     * @param string $user_id
     * @return JsonResource
     */
    public function findByCourseIdAndUserId(string $course_id, string $user_id): JsonResource
    {
        return new JsonResource($this->repository->where(['course_id' => $course_id, 'user_id' => $user_id])->first());
    }

    public function setFailedTestStatus(UserTakenCourse $takenCourse): void
    {
        $this->repository->updateById($takenCourse->id, new SetStatusUserTakenCourseDTO(TakingCourseStatusTypeEnum::FAILED_TEST));
    }

    /**
     * @param UserTakenCourse $takenCourse
     * @return void
     */
    public function setWaitingStatus(UserTakenCourse $takenCourse): void
    {
        parent::updateById($takenCourse->id, new SetStatusUserTakenCourseDTO(TakingCourseStatusTypeEnum::WAITING));
    }

    /**
     * @param string $course_id
     * @return Collection
     */
    public function findWaiting(string $course_id): Collection
    {
        return $this->repository->where(['course_id' => $course_id, 'status' => TakingCourseStatusTypeEnum::WAITING]);
    }

    /**
     * @param Collection $courses
     * @return Collection
     */
    public function findWaitingConfirm(Collection $courses): Collection
    {
        return $this->repository->whereIn(['course_id',$courses->keyBy('id')->keys()])->whereIn(['status', [TakingCourseStatusTypeEnum::REQUESTED,TakingCourseStatusTypeEnum::WAITING, TakingCourseStatusTypeEnum::FINISH_REQUEST, TakingCourseStatusTypeEnum::FAILED_TEST]])->get();
    }
}
