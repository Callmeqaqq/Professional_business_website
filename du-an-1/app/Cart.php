<?php
namespace App;

class Cart {
    public $products = null;
    public $totalPrice = 0;
    public $quantity = 0;

    public function __construct($cart) {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->quantity = $cart->quantity;
        }
    }

    public function AddCart($product, $slug) {
        $newProduct = ['quantity' => 0, 'price' => $product->Price, 'productInfo' => $product];
        if ($this->products) {
            if (array_key_exists($slug, $this->products)) {
                $newProduct = $this->products[$slug];
            }
        }
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $product->Price;
        $this->products[$slug] = $newProduct;
        $this->totalPrice += $product->Price;
        $this->quantity += $newProduct['quantity'];
        $this->quantity++;
    }
}
