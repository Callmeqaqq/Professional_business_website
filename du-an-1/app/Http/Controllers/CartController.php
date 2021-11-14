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

    public function DeleteItemCart(Request $request, $slug) {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($slug);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
            $request->Session()->forget('Cart');
        }
        return view('cart', compact('newCart'));
    }

    public function DeleteAllCart(Request $request) {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
    }

    protected function Checkout()
    {
        return view('cart/checkout');
    }
}
