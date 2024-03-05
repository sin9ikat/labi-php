<?php

namespace App\Events;

use App\Models\ChatMessage;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatMessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(private readonly ChatMessage $chatMessage)
    {
    }

    public function broadcastAs(): string
    {
        return 'chat-message.sent';
    }

    public function broadCastWith(): array
    {
        return [
            'message' => $this->chatMessage->message,
            'userName' => $this->chatMessage->user->name,
            'sentAt' => $this->chatMessage->sent_at
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('chats.'.$this->chatMessage->chat_id),
        ];
    }
}
