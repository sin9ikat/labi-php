<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\LessonContentRepositoryInterface;
use Illuminate\Support\Collection;

class LessonContentService extends BaseService
{
    /**
     * @param LessonContentRepositoryInterface $repository
     */
    public function __construct(LessonContentRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param string $id
     * @return Collection
     */
    public function getContentForLesson(string $id): Collection
    {
        return $this->repository->where(['lesson_id' => $id],'priority');
    }
}
