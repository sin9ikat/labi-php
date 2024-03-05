<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\QuestionResponseRepositoryInterface;

class QuestionResponseService extends BaseService
{
    /**
     * @param QuestionResponseRepositoryInterface $repository
     */
    public function __construct(QuestionResponseRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
