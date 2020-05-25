<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Products_model;

class CartController extends Controller
{
	
    public function index()
    {
    	$cartItems = Cart::content();
    	return view ('cart.index',compact('cartItems'));
    }

    public function addItem($id)
    {
    	$product = Products_model::findOrFail($id);

    	Cart::add([
    	 'id' => $product->id,
    	 'name' => $product->pro_name ,
    	 'qty' => 1,
    	 'price' =>  $product->pro_price ,
    	 'weight' => 550,
    	 'options' =>[
	    	 'img' => $product->image ,
	    	 'stock' => $product->stock
	    	 ] 
    	]);

    	return back();
    }

    public function update(Request $request , $id)
    {
    	$qty = $request->qty;
    	$proId = $request->proId;
    	$product = Products_model::findOrFail($proId);
    	$stock = $product->stock;

    	if ($qty<$stock) {

    		Cart::update($id,$request->qty);

    		return back()->with('status','Cart is Updated');

    	}else {

    		return back()->with('error','please check your quantity is more than products stock ');
    	}
    }

    public function destroy($id)
    {
    	Cart::remove($id);
    	return back();
    }
}
