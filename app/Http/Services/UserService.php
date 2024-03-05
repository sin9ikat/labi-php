<?php

namespace App\Http\Services;

use App\Models\Course;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isTrue;

class UserService extends BaseService
{
    /**
     * @param UserRepositoryInterface $repository
     */
    public function __construct(UserRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

	/**
	 * @return Collection
	 */
    public function getAllCreators(): Collection
    {
        return $this->repository->where(['role_id' => 1]);
    }

    public function attachOrDetachCourse(string $course, bool $attach = false)
    {
        $attach
            ? $this->repository->attachCourse(Auth::user(), $course)
            : $this->repository->detachCourse(Auth::user(), $course);
    }

}
