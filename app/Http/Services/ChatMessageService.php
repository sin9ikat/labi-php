<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\ChatMessageRepositoryInterface;
use Illuminate\Support\Collection;

class ChatMessageService extends BaseService
{
    /**
     * @param ChatMessageRepositoryInterface $repository
     */
    public function __construct(ChatMessageRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param string $chat_id
     * @return Collection
     */
    public function getByChatId(string $chat_id): Collection
    {
        return $this->repository->where(['chat_id' => $chat_id]);
    }
}
