<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\PostCreated;
use App\Notifications\PostPublished;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendNotification
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

    public function handle(PostCreated $event)
    {
        $post = $event->post;

        // Enviar la notificación a través de Mailtrap
        $usersToNotify = User::all(); // Obtén los usuarios a notificar
        Notification::send($usersToNotify, new PostPublished($post));
    }
}
