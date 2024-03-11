<?php

namespace App\Controller;

use App\Model\Cart;
use App\Model\CartItem;

class CartController {

    public function __construct(private readonly Cart $cart)
    {
    }

    public function addToCart($productID, $quantity): void
    {
        $item = new CartItem($productID, $quantity);
        $this->cart->addItem($item);
    }
}
