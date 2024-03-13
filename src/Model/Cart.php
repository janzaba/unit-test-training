<?php

namespace App\Model;

class Cart {
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function addItem(CartItem $item): void
    {
        $this->items[] = $item;
    }

    public function removeItem($productID): void
    {
        foreach ($this->items as $key => $item) {
            if ($item->getProductID() === $productID) {
                unset($this->items[$key]);
            }
        }
    }

    public function calculateTotal(): int
    {
        $total = 0;
        /** @var CartItem $item */
        foreach ($this->items as $item) {
            $total += $item->getItemTotal();
        }

        return $total;
    }
}
