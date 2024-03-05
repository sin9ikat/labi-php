<?php

namespace App\Http\Services;

use App\DTO\UserLesson\CreateUserLessonDTO;
use App\DTO\UserLesson\SetFinishTimeUserLessonDTO;
use App\Repositories\Interfaces\UserLessonRepositoryInterface;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class UserLessonService extends BaseService
{
    /**
     * @param UserLessonRepositoryInterface $repository
     */
    public function __construct(UserLessonRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param string $user_id
     * @param string $lesson_id
     * @return void
     */
    public function createIfNotExist(string $user_id, string $lesson_id): void
    {
        if (!$this->findByUserIdAndLessonId($user_id, $lesson_id)->resource)
            $this->repository->create(new CreateUserLessonDTO($user_id, $lesson_id, Carbon::now()));
    }

    /**
     * @param string $user_id
     * @param string $lesson_id
     * @return JsonResource
     */
    public function findByUserIdAndLessonId(string $user_id, string $lesson_id): JsonResource
    {
        return new JsonResource($this->repository->where(['user_id' => $user_id, 'lesson_id' => $lesson_id])->first());
    }

    /**
     * @param string $user_id
     * @param string $lesson_id
     * @return void
     */
    public function setLessonFinishTime(string $user_id, string $lesson_id): void
    {
        $this->updateById($this->findByUserIdAndLessonId($user_id, $lesson_id)->resource->id, new SetFinishTimeUserLessonDTO(Carbon::now()));
    }

    /**
     * @param Collection $data
     * @return Collection
     */
    public function addCompletionTime(Collection $data): Collection
    {
        foreach ($data as $entity) {
            $userLesson = $this->findByUserIdAndLessonId($entity->user_id, $entity->lesson_id);
            if ($userLesson->resource) {
                $finished_time = Carbon::parse($userLesson->finished_at);
                $started_time = Carbon::parse($userLesson->started_at);
                $entity->setAttribute('completion_time', $finished_time->locale('ru')->diffForHumans($started_time, CarbonInterface::DIFF_ABSOLUTE, true, 3));
            }
        }
        return $data;
    }
}
