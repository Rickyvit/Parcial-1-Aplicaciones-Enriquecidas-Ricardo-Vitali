@extends('layouts.plantilla')

@section('contenido')
<h3>Formulario Editar</h3>


<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="crearEditar">
        <div class="form-group">
                <label for="" class="labelCrear">Nombre del Articulo</label>
                <input type="text" class="form-control" id="articulo" name="articulo" value="{{$articulo->nombreProducto}}">
            </div>
            <div>
                <label for="" class="labelCrear">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$articulo->descripcion}}">
            </div>
            <div>
                <label for="" class="labelCrear">Precio</label>
                <input type="number" class="form-control mb-3" id="precio" name="precio" step="any" value="{{$articulo->precio}}">
            </div>

            <button type="submit" class="btn btn-success">Aceptar</button>
            <a href="/articulos" class="btn btn-dark">Cancelar</a>
        </div>
    </div>
        
</form>

@endsection