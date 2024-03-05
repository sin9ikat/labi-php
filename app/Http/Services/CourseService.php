<?php

namespace App\Http\Services;

use App\DTO\CreateCourseWithoutCategoriesDTO;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;

class CourseService extends BaseService
{
    /**
     * @param CourseRepositoryInterface $repository
     */
    public function __construct(CourseRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param Data $data
     * @return void
     */
    public function createCourseAndCategories(Data $data): void
    {
        $arrayData = $data->toArray();
        if (array_key_exists('category_id',$arrayData)){
            $categoriesIds = $arrayData['category_id'];
            unset($arrayData['category_id']);
            $this->repository->create(new CreateCourseWithoutCategoriesDTO(...$arrayData));
            $course = $this->repository->findLastCourse();
            $this->repository->syncCourseAndCategories($course, $categoriesIds);
        } else {
            $this->repository->create(new CreateCourseWithoutCategoriesDTO(...$arrayData));
        }
    }

    /**
     * @param Data $data
     * @param string $id
     * @return void
     */
    public function updateCourseAndCategories(Data $data, string $id): void
    {
        $categoriesIds = [];
        if (array_key_exists('category_id',$data->toArray())){
            $categoriesIds = $data->category_id;
            $data = new CreateCourseWithoutCategoriesDTO($data->title, $data->user_id);
        }
        $course = $this->repository->first($id);
        $this->repository->syncCourseAndCategories($course, $categoriesIds);
        parent::updateById($id, $data);
    }

	/**
	 * @param string $id
	 * @return LengthAwarePaginator
	 */
    public function paginateCreatorCourses(string $id): LengthAwarePaginator
    {
        return $this->repository->where(['user_id' => $id])->paginate();
    }

	/**
	 * @param string $id
	 * @return LengthAwarePaginator
	 */
    public function paginateCreatorCoursesTrashed(string $id): LengthAwarePaginator
    {
        return $this->repository->onlyTrashed('')->where(['user_id' => $id])->paginate();
    }

	/**
	 * @return LengthAwarePaginator
	 */
    public function paginateAllWithAuthorCategoriesAndLessons(): LengthAwarePaginator
    {
        return $this->getAllWithAuthorCategoriesAndLessons()->paginate();
    }

    /**
     * @param string $id
     * @return Collection
     */
    public function getAllByAuthor(string $id): Collection
    {
        return $this->repository->where(['user_id' => $id]);
    }

    /**
     * @return Collection
     */
    public function getAllWithAuthorCategoriesAndLessons(): Collection
    {
        return $this->repository->with(['lessons','user','categories'])->get();
    }
}
