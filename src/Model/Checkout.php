<?php

namespace App\Model;

use App\Service\NotificationService;

class Checkout
{
    public function __construct(private readonly NotificationService $notificationService)
    {}

    public function processOrder(Cart $cart, string $email): bool
    {
        // Code to process the order...

        // Send email notification
        $this->notificationService->sendEmail($email, "Order Confirmation", "Your order has been processed.");

        return true;
    }
}
