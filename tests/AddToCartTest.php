<?php

namespace App\Tests;

use App\Model\Cart;
use App\Model\CartItem;
use PHPUnit\Framework\TestCase;

class AddToCartTest extends TestCase
{
    public function testAddToCart()
    {
        $cart = new Cart();
        $cartItem = new CartItem(1, 2);

        $cart->addItem($cartItem);

        $result = $cart->calculateTotal();
        $this->assertEquals(20, $result);
    }
}
