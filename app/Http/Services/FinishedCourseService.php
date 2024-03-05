<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\FinishedCourseRepositoryInterface;

class FinishedCourseService extends BaseService
{
    /**
     * @param FinishedCourseRepositoryInterface $repository
     */
    public function __construct(FinishedCourseRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
