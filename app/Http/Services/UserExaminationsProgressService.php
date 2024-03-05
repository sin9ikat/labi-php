<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\UserExaminationsProgressRepositoryInterface;
use Illuminate\Http\Resources\Json\JsonResource;

class UserExaminationsProgressService extends BaseService
{
    /**
     * @param UserExaminationsProgressRepositoryInterface $repository
     */
    public function __construct(UserExaminationsProgressRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param string $user_id
     * @param string $examination_id
     * @return JsonResource
     */
    public function firstByUserIdAndExaminationId(string $user_id, string $examination_id): JsonResource
    {
        return $this->repository->firstByUserIdAndExaminationId($user_id, $examination_id);
    }
}
