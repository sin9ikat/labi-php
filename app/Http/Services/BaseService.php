<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;

class BaseService
{
    /**
     * @var BaseRepositoryInterface
     */
    protected BaseRepositoryInterface $repository;

    /**
     * @param BaseRepositoryInterface $repository
     */
    public function __construct(BaseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return JsonResource
     */
    public function findFirstById($id): JsonResource
    {
        return $this->repository->first($id);
    }

    /**
     * @param $id
     * @return JsonResource
     */
    public function findFirstByIdTrashed($id) : JsonResource
    {
        return $this->repository->onlyTrashed('')->first($id);
    }

    /**
     * @param int|null $perPage
     * @param array|null $columns
     * @param string|null $pageName
     * @param int|null $page
     * @return LengthAwarePaginator
     */
    public function paginate(?int $perPage = 15, ?array $columns = ['*'], ?string $pageName = 'page', ?int $page = null): LengthAwarePaginator
    {
        return $this->repository->paginate($perPage, $columns, $pageName, $page);
    }

    /**
     * @param int|null $perPage
     * @param array|null $columns
     * @param string|null $pageName
     * @param int|null $page
     * @return LengthAwarePaginator
     */
    public function paginateTrashed(?int $perPage = 15, ?array $columns = ['*'], ?string $pageName = 'page', ?int $page = null): LengthAwarePaginator
    {
        return $this->repository->onlyTrashed('')->paginate($perPage, $columns, $pageName, $page);
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->repository->get();
    }

    /**
     * @return Collection
     */
    public function getAllTrashed(): Collection
    {
        return $this->repository->onlyTrashed('')->get();
    }

    /**
     * @param Data $data
     * @return JsonResource|null
     */
    public function create(Data $data): ?JsonResource
    {
        return $this->repository->create($data);
    }

    /**
     * @param int $id
     * @param Data $data
     * @return void
     */
    public function updateById(int $id, Data $data): void
    {
        $this->repository->updateById($id, $data);
    }

    /**
     * @param int $id
     * @return void
     */
    public function deleteById(int $id): void
    {
        $this->repository->deleteById($id);
    }

    /**
     * @param int $id
     * @return void
     */
    public function restoreById(int $id): void
    {
        $this->repository->restoreById($id);
    }

}
