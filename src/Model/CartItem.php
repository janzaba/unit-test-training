<?php

namespace App\Model;

class CartItem {

    const PRICE = 10;
    private int $productID;
    private int $quantity;

    public function __construct(int $productID, int $quantity) {
        $this->productID = $productID;
        $this->quantity = $quantity;
    }

    public function getProductID(): int
    {
        return $this->productID;
    }

    public function getItemTotal(): int
    {
        return $this->quantity * self::PRICE;
    }

    public function getDiscountedTotal(Discount $discount): float
    {
        $total = $this->getItemTotal();
        return $discount->applyDiscount($total);
    }
}
