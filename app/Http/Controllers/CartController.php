<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function addProduct($product_id)
    {
        $product = Product::find($product_id);
        if($product)
        {
            // Add to session
            if(session()->has('cart'))
            {
                $cart = session('cart');
                $cart []= $product->id;
                session(['cart' => $cart]);
            }
            else
            {
                session(['cart' => [$product->id]]);
            }
        }
        return redirect('/products');
    }

    public function removeProduct($key)
    {
        if(session()->has('cart'))
        {
            $cart = session('cart');
            if(isset($cart[$key]))
            {
                unset($cart[$key]);
                session(['cart' => $cart]);
            }
        }
        return redirect('/products');
    }

    public function empty()
    {
        session()->forget('cart');
        return redirect('/products');
    }
}
