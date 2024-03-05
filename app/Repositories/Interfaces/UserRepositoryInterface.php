<?php

namespace App\Repositories\Interfaces;

use App\Models\Course;
use App\Models\User;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * @param User $user
     * @param string $course
     * @return void
     */
    public function attachCourse(User $user, string $course);

    /**
     * @param User $user
     * @param string $course
     * @return void
     */
    public function detachCourse(User $user, string $course);
}
