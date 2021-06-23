<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {

        $articulos = Articulo::all();
        return view('home')->with('articulos',$articulos);
    }

    public function cart()
    {
        $cartCollection = \Cart::getContent();
        return view('layouts.cart')->with('cartCollection',$cartCollection);
    }

     public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'nombreProducto' => $request->nombreProducto,
            'precio' => $request->precio,
            'quantity' => $request->quantity,
            'attributes' => array(
                
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Producto añadido exitosamente!');
    }



    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Producto Removido exitosamente!');
    }

 

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carro Vacio');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Compra Actualizada');
    }

    public function checkout(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Compra realizada!');
    }



}
