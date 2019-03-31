<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $cart = session('cart');
        if($cart != null)
        {
            // this can be done better with hashmap
            foreach($cart as $key => $cartProduct)
            {
                foreach($products as $product)
                {
                    if($cartProduct == $product->id)
                    {
                        $cart[$key] = $product->name;
                    }
                }
            }
        }
        return view('products', ['products' => $products, 'cart' => $cart]);
    }
}
