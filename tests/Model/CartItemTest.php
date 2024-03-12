<?php

namespace App\Tests\Model;

use App\Model\CartItem;
use PHPUnit\Framework\TestCase;

class CartItemTest extends TestCase
{

    public function testGetQuantity()
    {
        $cartItem = new CartItem(1, 2);

        $cartItem->getQuantity();

        $this->assertTrue(true);
    }

    public function testGetItemTotal()
    {
        $cartItem = new CartItem(1, 2);

        $cartItem->getItemTotal();

        $this->assertTrue(true);
    }

    public function testGetProductID()
    {
        $cartItem = new CartItem(1, 2);

        $cartItem->getProductID();

        $this->assertTrue(true);
    }
}
