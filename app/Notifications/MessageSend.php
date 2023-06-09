<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;

class MessageSend extends Notification
{

    protected $message;

    use Queueable;



    /**
     * Create a new notification instance.
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting('Hola'. $notifiable->name)
                    ->line('Te has contactado con la Comunidad de gracia, Los Teques Venezuela')
                    ->subject('Has recibido un mensaje')
                    ->action('Clic aqui para ver el mensaje',  route('admin.messages.show', $this->message->id))
                    ->line('Gracias y que dios te bendiga');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'link'=> route('admin.messages.show', $this->message->id),
            'text' => "Has recibido un mensaje de ". $this->message->sender->name,
        ];
    }
}
