<?php

namespace App\Http\Services;

use App\Models\Lesson;
use App\Repositories\Interfaces\LessonRepositoryInterface;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class LessonService extends BaseService
{
    /**
     * @param LessonRepositoryInterface $repository
     */
    public function __construct(LessonRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param string $id
     * @return Collection
     */
    public function getLessonsFromCourseWithPriority(string $id): Collection
    {
        return $this->repository->where(['course_id' => $id],'priority','asc');
    }

	/**
	 * @param Collection $lessons
	 * @param Lesson $lesson
	 * @return bool
	 */
	public function checkLast(Collection $lessons, Lesson $lesson): bool
	{
		if ($lesson->priority == $lessons->count())
			return true;
		return false;
	}

	/**
	 * @param Lesson $lesson
	 * @return JsonResource
	 */
	public function findPrevious(Lesson $lesson): JsonResource
	{
		return $this->repository->first($lesson->priority-1, 'priority');
	}

    /**
     * @param Lesson $lesson
     * @return JsonResource
     */
	public function findNext(Lesson $lesson): JsonResource
	{
		return $this->repository->first($lesson->priority+1, 'priority');
	}

    /**
     * @param Collection $courses
     * @return LengthAwarePaginator
     */
    public function countExaminationsAndPaginate(Collection $courses): LengthAwarePaginator
    {
        foreach ($courses as $course){
            $k = 0;
            $lessons = $this->getWithExaminationsByCourseId($course->id);
            foreach ($lessons as $lesson){
                if ($lesson->examinations->first()) $k++;
            }
            $course->setAttribute('examinations_count', $k);
        }
        return $courses->paginate();
    }

    /**
     * @param string $course_id
     * @return Collection
     */
    public function getWithExaminationsByCourseId(string $course_id): Collection
    {
        return $this->repository->with('examinations')->where(['course_id' => $course_id]);
    }
}
