<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\ContactUs;
use App\Notifications\ContactAdmin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendAdminNotificationFromContact
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
    public function handle(ContactUs $event): void
    {
        $admins = User::where('is_admin', '1')->get();
        Notification::send($admins, new ContactAdmin($event->datas));

    }
}
