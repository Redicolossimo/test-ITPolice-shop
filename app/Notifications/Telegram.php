<?php

namespace App\Notifications;

use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Notifications\Notification;

class Telegram extends Notification
{
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram($notifiable)
    {
        $url = url('/dashboard');

        // Получаем информацию о заказе из БД

        return TelegramMessage::create()
            ->content("This is bot Message\n Your Address is: $notifiable->address")
            ->button('Order Page', $url);
    }
}
