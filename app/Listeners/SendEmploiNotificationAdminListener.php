<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\EmploiCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\NewEmploiNotification;
use Illuminate\Support\Facades\Notification;

class SendEmploiNotificationAdminListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EmploiCreated $event): void
    {
        //
       $admins = User::where('is_admin', '1')->get();
       Notification::send($admins, new NewEmploiNotification($event->emploi));

    }
}
