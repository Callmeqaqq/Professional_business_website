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

    public function AddCart(Request $request, $slug, $variantId, $quantity) {
        $product = DB::table('product')->Join('variant', 'product.ProductId', '=','variant.ProductId')
            ->Where('product.Slug', $slug)
            ->Where('variant.VariantId', $variantId)
            ->Select('product.*','variant.*', 'product.Price as ProductPrice', 'product.Active as ProductActive', 'variant.Price as VariantPrice', 'variant.Active as VariantActive')
            ->first();

//        if ($request->session()->has('Cart')) {
//            if (($request->Session()->get('Cart')->products[$slug.'&'.$variantId]['quantity'] + $quantity) > $product->Quantity) {
//            }
//        }
//        dd($product);
        if ($product != null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $slug, $variantId, $quantity);

            $request->Session()->put('Cart', $newCart);
//               dd($newCart);
        }
        return view('cart/minicart');
    }

    public function DeleteItemCart(Request $request, $slug, $variantId) {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($slug, $variantId);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
            $request->Session()->forget('Cart');
        }
        return view('cart/minicart');
    }

    public function DeleteItemListCart(Request $request, $slug, $variantId) {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($slug, $variantId);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
            $request->Session()->forget('Cart');
        }
        return view('cart/cartlist');
    }

    public function SaveItemListCart(Request $request, $slug, $variantId, $quantity) {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($slug, $variantId, $quantity);

        $request->Session()->put('Cart', $newCart);
        return view('cart/cartlist');
    }

    public function SaveAllListCart(Request $request) {
        foreach ($request->data as $item) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($item['slug'], $item['variant'], $item['quantity']);
            $request->Session()->put('Cart', $newCart);
        }
        return view('cart/cartlist');
    }

    public function DeleteAllListCart(Request $request) {
        $request->Session()->forget('Cart');
        return view('cart/cartlist');
    }

    public function CheckQuantity(Request $request) {
        $product = DB::table('product')->Join('variant', 'product.ProductId', '=','variant.ProductId')
            ->Where('product.Slug', $request->data['slug'])
            ->Where('variant.VariantId', $request->data['variant'])
            ->Select('product.*','variant.*', 'product.Price as ProductPrice', 'product.Active as ProductActive', 'variant.Price as VariantPrice', 'variant.Active as VariantActive')
            ->first();

        if ($request->Session()->has('Cart')) {
            if (($request->Session()->get('Cart')->products[$request->data['slug'].'&'.$request->data['variant']]['quantity'] + $request->data['quantity']) > $product->Quantity) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }

    protected function Checkout()
    {
        return view('cart/checkout');
    }
}
