<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //show the contents of cart
        if(array_key_exists('cart', $request->session()->all('cart')) ){
            $cart_items = $request->session()->all()['cart'];
        }else{
            $cart_items = [];
        }
        return view('cart.index', ['cart_items' => $cart_items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $sku)
    {
        //add something to your cart
        $request->session()->push('cart', $sku);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $key)
    {
        //pull the items from cart
        $cart_items = $request->session()->all()['cart'];

        //remove the product to be deleted
        unset($cart_items[$key]);

        //forget the whole cart session
        $request->session()->forget('cart');

        //add the array to a new cart session
        $request->session()->put('cart', $cart_items);

        return redirect('cart/view');
    }
}
