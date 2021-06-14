<?php

namespace App\Notifications;

use Lang;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword as Notification;

class ResetPassword extends Notification
{
    public function toMail($notifiable)
    {
        if ($notifiable->role_id === \App\Enums\UserRole::USER) {
            $url = route('customer.password.reset', $this->token) . '?email=' . urlencode($notifiable->email);
        } else {
            $url = route('partner.password.reset', $this->token) . '?email=' . urlencode($notifiable->email);
        }

        return $this->buildMailMessage($url, $notifiable->name);
    }

    public function buildMailMessage($url, $name)
    {
        return (new MailMessage)
            ->subject(Lang::get('Reset Password to ' . $name))
            ->line(Lang::get('You are receiving this email because we received a password reset request for your account.'))
            ->action(Lang::get('Reset Password'), $url)
            ->line(Lang::get('If you did not request a password reset, no further action is required.'));
    }
}
