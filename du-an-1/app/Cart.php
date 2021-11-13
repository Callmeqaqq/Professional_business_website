<?php
namespace App;

class Cart {
    public $product = null;
    public $totalPrice = 0;
    public $quantity = 0;

    public function __construct($cart) {
        if ($cart) {
            $this->product = $cart->product;
            $this->totalPrice = $cart->totalPrice;
            $this->quantity = $cart->quantity;
        }
    }

    public function AddCart($product, $slug) {
        $newProduct = ['quantity' => 0, 'price' => $product->Price, 'productInfo' => $product];
        if ($this->product) {
//            if (array_key_exists($slug, $product)) {
//                $newProduct = $product[$slug];
//            }
            if ($slug === $product->Slug) {
//                $newProduct = $product[$slug];
            }
        }
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $product->Price;
        $this->product[$slug] = $newProduct;
        $this->totalPrice += $product->Price;
        $this->quantity += $newProduct['quantity'];
        $this->quantity++;
    }
}
