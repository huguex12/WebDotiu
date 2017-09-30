<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;
use DB;


class CartController extends Controller
{
public function _construct()
{
  if(!\Session::has('cart')) \Session::put('cart',array());
}


    //Show cart
public function show(){

  $cart =\Session::get('cart');
  $total= $this->total();
  return view('store.cart',compact('cart','total'));
}
      //a;adir cart
      public function add(Producto $product){
        $cart = \Session::get('cart');
        $product->cantidad=1;
        $cart[$product->slug] = $product;
        \Session::put('cart',$cart);

        return redirect()->route('cart-show');
      }


        //eliminar cart
public function delete(Producto $product){
  $cart = \Session::get('cart');
  unset($cart[$product->slug]);
    \Session::put('cart', $cart);

  return redirect()->route('cart-show');
}

//atualizar cart
public function update(Producto $product, $cantidad){
   $cart = \Session::get('cart');
   $cart[$product->slug]->cantidad = $cantidad;
  \Session::put('cart', $cart);

  return redirect()->route('cart-show');
}

            //vaciar cart
  public function trash(){
      \Session::forget('cart');

        return redirect()->route('cart-show');
    }

               /////////////////////////////total cart
              private function total()
              {
                if ($cart = \Session::get('cart')) {
                  $total= 0;
                  foreach($cart as $item) {
                    $total += $item->precio * $item->cantidad;
                  }
                  return $total;
                }
                else {
                  \Session::forget('cart');
                }



              }

             public function orderDetail()
              {
                if(count(\Session::get('cart')) <= 0) return redirect()->route('home');
                $cart = \Session::get('cart');
                $total = $this->total();

                return view('store.order-detail', compact('cart', 'total'));
              }


}
