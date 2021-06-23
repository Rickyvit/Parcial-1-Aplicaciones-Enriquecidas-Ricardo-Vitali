@extends('layouts.plantilla')

@section('contenido')
<h3>Formulario crear</h3>

<form action="/articulos" method="POST">
@csrf
    <div class="crearEditar">
        <div class="form-group">
            <label for="" class="labelCrear">Nombre del Articulo</label>
            <input type="text" class="form-control" id="articulo" name="articulo">
        </div>
        <div>
            <label for="" class="labelCrear">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <div>
            <label for="" class="labelCrear">Precio</label>
            <input type="number" class="form-control mb-3" id="precio" name="precio" step="any" value="0.00">
        </div>
    </div>
    
    <button type="submit" class="btn btn-success">Aceptar</button>
    <a href="/articulos" class="btn btn-dark">Cancelar</a>


</form>

@endsection