<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\ExaminationRepositoryInterface;

class ExaminationService extends BaseService
{
    /**
     * @param ExaminationRepositoryInterface $repository
     */
    public function __construct(ExaminationRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
