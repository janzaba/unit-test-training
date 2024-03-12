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
        $cartItemMock1 = $this->createMock(CartItem::class);
        $cartItemMock1
            ->expects($this->once())
            ->method('getItemTotal')
            ->willReturn(20);
        $cartItemMock2 = $this->createMock(CartItem::class);
        $cartItemMock2
            ->expects($this->once())
            ->method('getItemTotal')
            ->willReturn(30);
        $cart->addItem($cartItemMock1);
        $cart->addItem($cartItemMock2);

        $result = $cart->calculateTotal();

        $this->assertEquals(50, $result);
    }

    public function testRemoveItem(): void
    {
        // Arrange
        $cart = new Cart();
        $cartItemMock1 = $this->createMock(CartItem::class);
        $cartItemMock1->method('getProductID')->willReturn(1);

        $cartItemMock2 = $this->createMock(CartItem::class);
        $cartItemMock2
            ->method('getItemTotal')
            ->willReturn(30);
        $cartItemMock2->method('getProductID')->willReturn(2);

        $cart->addItem($cartItemMock1);
        $cart->addItem($cartItemMock2);

        // Act
        $cart->removeItem(1);
        $result = $cart->calculateTotal();

        // Assert
        $this->assertEquals(30, $result);
    }
}
