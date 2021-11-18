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

    public function AddCart($product, $slug, $quantity) {
        $newProduct = ['quantity' => 0, 'price' => $product->Price, 'productInfo' => $product];
        if ($this->products) {
            if (array_key_exists($slug, $this->products)) {
                $newProduct = $this->products[$slug];
            }
        }
        $quantity > 1 ? $newProduct['quantity'] += $quantity : $newProduct['quantity']++;;

        $newProduct['price'] = $newProduct['quantity'] * $product->Price;
        $this->products[$slug] = $newProduct;
        $quantity > 1 ? $this->totalPrice += $product->Price : $this->totalPrice += $product->Price * $quantity;
        $quantity > 1 ? $this->totalQuantity += $quantity : $this->totalQuantity++;
    }

    public function DeleteItemCart($slug) {
        abs($this->totalQuantity -= $this->products[$slug]['quantity']);
        abs($this->totalPrice -= $this->products[$slug]['price']);
        unset($this->products[$slug]);
    }

    public function UpdateItemCart($slug, $quantity) {
        $this->totalQuantity -= $this->products[$slug]['quantity'];
        $this->totalPrice -= $this->products[$slug]['price'];

        $this->products[$slug]['quantity'] = $quantity;
        $this->products[$slug]['price'] = $quantity * $this->products[$slug]['productInfo']->Price;

        $this->totalQuantity += $this->products[$slug]['quantity'];
        $this->totalPrice += $this->products[$slug]['price'];
    }
}
