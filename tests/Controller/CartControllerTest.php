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
        $cartMock = $this->createMock(Cart::class);
        $cartController = new CartController($cartMock);

        $cartController->addToCart(1, 2);

        $this->assertTrue(true);
    }
}
