<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index() {
        return view('cart/cart');
    }

    public function AddCart(Request $request, $slug) {
        $product = DB::table('product')->where('Slug',$slug)->first();
        $newCart = null;
        if ($product != null) {
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $slug);
            $request->Session()->put('cart', $newCart);
        }
        return view('cart/cart', compact('newCart'));
    }
}
