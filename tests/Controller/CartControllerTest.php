<?php

namespace App\Tests\Controller;

use App\Controller\CartController;
use App\Model\Cart;
use App\Model\CartItem;
use PHPUnit\Framework\TestCase;

class CartControllerTest extends TestCase
{

    public function testAddToCart()
    {
        // integration test would be better here
        $cartMock = $this->createMock(Cart::class);
        $cartController = new CartController($cartMock);
        $cartMock
            ->expects($this->once())
            ->method('addItem')
            ->with($this->isInstanceOf(CartItem::class));

        $cartController->addToCart(1, 2);
    }
}
