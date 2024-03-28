<?php

namespace App\Service;

class NotificationService
{
    public function sendEmail(string $email, string $subject, string $message): bool
    {
        $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . PHP_VERSION;

        return mail($email, $subject, $message, $headers);
    }
}
