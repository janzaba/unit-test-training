<?php

namespace App\Tests\Model;

use App\Model\CartItem;
use PHPUnit\Framework\TestCase;

class CartItemTest extends TestCase
{

    public function testGetQuantity()
    {
        $cartItem = new CartItem(1, 2);

        $result = $cartItem->getQuantity();

        $this->assertEquals(2, $result);
    }

    public function testGetItemTotal()
    {
        $cartItem = new CartItem(1, 2);

        $result = $cartItem->getItemTotal();

        $this->assertEquals(20, $result);
    }

    public function testGetProductID()
    {
        $cartItem = new CartItem(1, 2);

        $result = $cartItem->getProductID();

        $this->assertEquals(1, $result);
    }
}
