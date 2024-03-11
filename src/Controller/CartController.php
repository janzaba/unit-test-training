<?php

namespace App\Controller;

use App\Model\Cart;
use App\Model\CartItem;

class CartController {
    private Cart $cart;

    public function __construct()
    {
        $this->cart = new Cart();
    }

    public function addToCart($productID, $quantity): void
    {
        $item = new CartItem($productID, $quantity);
        $this->cart->addItem($item);
    }
}
