<?php

namespace App\Model;

use App\System\FileReader;

class CartBuilder
{
    public function __construct(private readonly FileReader $fileReader)
    {}

    public function buildCart(string $filePath): Cart
    {
        $data = $this->fileReader->read($filePath);
        $products = json_decode($data, true, 512, JSON_THROW_ON_ERROR);

        $cart = new Cart();
        foreach ($products as $product) {
            $cartItem = new CartItem($product['id'], $product['quantity']);
            $cart->addItem($cartItem);
        }

        return $cart;
    }
}
