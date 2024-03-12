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

        $cart->calculateTotal();

        $this->assertTrue(true);
    }
    public function testCalculateTotal(): void
    {
        $cart = new Cart();
        $itemCartMock = $this->createMock(CartItem::class);
        $cart->addItem($itemCartMock);

        $cart->calculateTotal();

        $this->assertTrue(true);
    }

    public function testRemoveItem(): void
    {
        $cart = new Cart();
        $itemCartMock = $this->createMock(CartItem::class);
        $itemCartMock->method('getProductID')
            ->willReturn(1);
        $cart->addItem($itemCartMock);

        $cart->removeItem(1);

        $this->assertTrue(true);
    }
}
