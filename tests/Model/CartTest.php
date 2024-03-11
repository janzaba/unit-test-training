<?php

namespace App\Tests\Model;

use App\Model\Cart;
use App\Model\CartItem;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{

    public function testCalculateTotalIsEmpty(): void
    {
        $cart = new Cart();

        $result = $cart->calculateTotal();

        $this->assertEquals(0, $result);
    }

    public function testCalculateTotal(): void
    {
        $cart = new Cart();
        $cart->addItem(new CartItem(1, 2));
        $cart->addItem(new CartItem(2, 3));

        $result = $cart->calculateTotal();

        $this->assertEquals(50, $result);
    }

    public function testRemoveItem(): void
    {
        $cart = new Cart();
        $cart->addItem(new CartItem(1, 2));
        $cart->addItem(new CartItem(2, 3));

        $cart->removeItem(1);
        $result = $cart->calculateTotal();

        $this->assertEquals(30, $result);
    }
}
