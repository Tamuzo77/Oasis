<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactAdmin extends Notification
{
    use Queueable;

    public $datas;
    /**
     * Create a new notification instance.
     */
    public function __construct($datas)
    {
        $this->datas = $datas;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        $email = $this->datas->email;
        $nom = $this->datas->nom;
        $phone = $this->datas->phone;
        $need = $this->datas->need;

        return [
            //
            'libelle' => 'Notification De Contact',
            'description' => " $nom ($email, $phone) : $need",
        ];
    }
}
