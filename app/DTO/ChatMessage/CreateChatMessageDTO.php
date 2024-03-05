<?php

namespace App\DTO\ChatMessage;

use DateTime;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;

class CreateChatMessageDTO extends Data
{
    public function __construct(
        public int $chat_id,
        public string $message,
        public int $user_id,
        #[WithCast(DateTimeInterfaceCast::class)]
        public DateTime $sent_at
    )
    {
    }
}
