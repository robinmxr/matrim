<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\UserApprovalNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;

class SendUserApprovalNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $usr = User::find($event->user->id);
        Notification::send($usr,new UserApprovalNotification($event->user));
    }
}
