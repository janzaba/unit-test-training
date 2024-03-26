<?php

namespace App\Tests;

use App\Model\Cart;
use App\Model\CartItem;
use PHPUnit\Framework\TestCase;

class RemoveItemTest extends TestCase
{
    public function testRemoveItem()
    {
        $cart = new Cart();
        $cartItem = new CartItem(1, 2);
        $cart->addItem($cartItem);

        $cart->removeItem(1);

        $result = $cart->calculateTotal();
        $this->assertEquals(0, $result);
    }
}
