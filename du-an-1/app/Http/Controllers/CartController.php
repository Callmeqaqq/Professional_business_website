<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Session;

class CartController extends Controller
{
    public function index()
    {
        return view('cart/cart');
    }

    public function AddCart(Request $request, $slug) {
            $product = DB::table('product')->where('Slug', $slug)->first();
            if ($product != null) {
                $oldCart = Session('Cart') ? Session('Cart') : null;
                $newCart = new Cart($oldCart);
                $newCart->AddCart($product, $slug);
                $request->Session()->put('Cart', $newCart);
//            dd($newCart);
            }
            return view('cart/cart');
    }

    protected function Checkout()
    {
        return view('cart/checkout');
    }
}
