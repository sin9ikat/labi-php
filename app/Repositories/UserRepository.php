<?php

namespace App\Repositories;

use App\Models\Course;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Resources\Json\JsonResource;
use Spatie\LaravelData\Data;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

	/**
	 * @param Data $data
	 * @return JsonResource
	 */
    public function create(Data $data): JsonResource
    {
        $user = parent::create($data);
        $user->resource->assignRole($user->role->name);
        return $user;
    }

    /**
     * @param User $user
     * @param string $course
     */
    public function attachCourse(User $user,string $course)
    {
        $user->favouriteCourses()->attach($course);
    }

    /**
     * @param User $user
     * @param string $course
     * @return void
     */
    public function detachCourse(User $user, string $course)
    {
        $user->favouriteCourses()->detach($course);
    }
}
