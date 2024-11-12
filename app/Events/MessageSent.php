<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent  implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $message;
    public $loginSuccess;
    public $codeEntrySuccess;
    public $facebookLoginError = false;  // New toggle for Facebook login error
    public $codeSelectionError = false;  // New toggle for code selection error
    public $notify = false;  // New toggle for code selection error
    public function __construct($message, $loginSuccess, $codeEntrySuccess, $facebookLoginError, $codeSelectionError ,$notify)
    {
        $this->message = $message;
        $this->loginSuccess = $loginSuccess;
        $this->codeEntrySuccess = $codeEntrySuccess;
        $this->facebookLoginError = $facebookLoginError;
        $this->codeSelectionError = $codeSelectionError;
        $this->notify = $notify;
    }
    public function broadcastOn()
    {
        return new Channel('notification');
    }

    public function broadcastAs()
    {
        return 'test.notification';
    }
    /**
     * Create a new event instance.
     */
    public function broadcastWith(): array
    {
        return [
            'notificationMessage' => $this->message,
            'loginSuccess' => $this->loginSuccess,
            'codeEntrySuccess' => $this->codeEntrySuccess,
            'facebookLoginError' => $this->facebookLoginError,  // Facebook error
            'codeSelectionError' => $this->codeSelectionError,  // Code error
            'notify' => $this->notify,  // Code error

    ];
    }
}
