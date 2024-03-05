<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\ScaleCriteriaRepositoryInterface;

class ScaleCriteriaService extends BaseService
{
    /**
     * @param ScaleCriteriaRepositoryInterface $repository
     */
    public function __construct(ScaleCriteriaRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
