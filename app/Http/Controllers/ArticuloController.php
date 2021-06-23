<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* use App\Models\User;  */
use App\Models\Articulo;



class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
         $this->middleware('auth'); 
    }
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulo.index', ['articulos' => $articulos]);
        
  /*       return view('articulo.index')->with('articulos',$articulos); */
        /* return view('home')->with('articulos',$articulos); */
    }

    /* public function showUser(){


        $users = User::all();

        return view('articulo.index')->with('users',$users);
    }
 */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();

        $articulos->nombreProducto = $request->get('articulo');
        $articulos->descripcion = $request->get('descripcion');
        $articulos->precio = $request->get('precio');

        $articulos->save();
        return redirect('/articulos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        return view('articulo.edit')->with('articulo',$articulo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);

        $articulo->nombreProducto = $request->get('articulo');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->precio = $request->get('precio');

        $articulo->save();
        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);

        $articulo->delete();
        return redirect('/articulos');

    }
}
