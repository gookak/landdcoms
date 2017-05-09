<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use DB;

class CartController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function addItem ($productId){


        $product = Product::find($productId);


        $cart = Cart::add(array('id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));

        echo Cart::get($rowId);;
        
        // return view('cart.index',compact('carts'));

        // if(!$cart){
        //     $cart =  new Cart();
        //     // $cart->user_id=Auth::user()->id;
        //     $cart->user_id= 1234;
        //     $cart->save();
        // }

        // $cartItem  = new Cartitem();
        // $cartItem->product_id=$productId;
        // $cartItem->cart_id= ;
        // $cartItem->save();

        // echo $cartItem;

        // return redirect('/cart');

    }

    public function showCart(){
        
        $carts = Cart();

        return view('cart.index',compact('carts'));
    }

    public function removeItem($id){

        CartItem::destroy($id);
        return redirect('/cart');
    }

    public function index(Request $request)
    {
        return view('cart.cart');
    }
}
