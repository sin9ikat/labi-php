<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\RoleRepositoryInterface;

class RoleService extends BaseService
{
    /**
     * @param RoleRepositoryInterface $repository
     */
    public function __construct(RoleRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
