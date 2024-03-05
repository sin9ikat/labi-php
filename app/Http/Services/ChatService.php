<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\ChatRepositoryInterface;

class ChatService extends BaseService
{
    /**
     * @param ChatRepositoryInterface $repository
     */
    public function __construct(ChatRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

}
