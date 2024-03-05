<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\AboutCourseRepositoryInterface;

class AboutCourseService extends BaseService
{
    /**
     * @param AboutCourseRepositoryInterface $repository
     */
    public function __construct(AboutCourseRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
