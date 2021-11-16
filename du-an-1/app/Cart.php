<?php
namespace App;

class Cart {
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($cart) {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
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
        $this->totalQuantity++;
    }

    public function DeleteItemCart($slug) {
        $this->totalQuantity -= $this->products[$slug]['quantity'];
        $this->totalPrice -= $this->products[$slug]['price'];
        unset($this->products[$slug]);
    }

    public function DeleteAllCart() {
        unset($this->products);
    }
}
