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

    public function AddCart(Request $request, $slug, $quantity) {
        $product = DB::table('product')->where('Slug', $slug)->first();
        if ($product != null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $slug, $quantity);

            $request->Session()->put('Cart', $newCart);
    //           dd($newCart);
        }
        return view('cart/minicart');
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
        return view('cart/minicart');
    }

    public function DeleteItemListCart(Request $request, $slug) {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($slug);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
            $request->Session()->forget('Cart');
        }
        return view('cart/cartlist');
    }

    public function SaveItemListCart(Request $request, $slug, $quantity) {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($slug, $quantity);

        $request->Session()->put('Cart', $newCart);
        return view('cart/cartlist');
    }

    public function SaveAllListCart(Request $request) {
        foreach ($request->data as $item) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($item['key'], $item['value']);
            $request->Session()->put('Cart', $newCart);
        }
        return view('cart/cartlist');
    }

    public function DeleteAllListCart(Request $request) {
        $request->Session()->forget('Cart');
        return view('cart/cartlist');
    }
}
