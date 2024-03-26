<?php

namespace App\Model;

readonly class Discount
{
    public function __construct(
        private string $code,
        private float $amount
    ) {}

    public function getCode(): string
    {
        return $this->code;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function applyDiscount(float $total): float
    {
        return $total - $this->amount;
    }
}
