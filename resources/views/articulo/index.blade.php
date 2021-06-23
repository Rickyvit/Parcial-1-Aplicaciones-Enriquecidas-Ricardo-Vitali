@extends('layouts.plantilla')

@section('contenido')



<div class="panelContenedor">
<a href="articulos/create" class="creacion btn btn-success"><i class="bi bi-plus-circle"></i> Crear</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Articulo</th>
                <th scope="col">Descrpcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>

        </thead>
        <tbody>
            @foreach($articulos as $articulo)
            <tr>
                <td>{{$articulo->id}}</td>
                <td>{{$articulo->nombreProducto}}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>{{$articulo->precio}}</td>
                <form action="{{route('articulos.destroy', $articulo->id)}}" method="POST">
                      <td><a href="/articulos/{{$articulo->id}}/edit" class="botonEditar"><i class="bi bi-pencil"></i>Editar</a>
                      @csrf
                      @method('DELETE')
                            <button type='submit' class="botonBorrar btn btn-danger btn-sm"><i class="bi bi-trash"></i>Borrar</button>
                </form>
                     </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div> 


@endsection