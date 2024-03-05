<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryService extends BaseService
{
    /**
     * @param CategoryRepositoryInterface $repository
     */
    public function __construct(CategoryRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
