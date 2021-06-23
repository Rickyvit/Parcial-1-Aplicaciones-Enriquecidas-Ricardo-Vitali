@extends('layouts.app')

@section('content')
<div class="contenido">
    <header>

    </header>


    <div class= "contenedorPastilla">
        <div class ="contenidoPastilla">
            <i class="bi bi-truck"></i>
            <h3>Envios a tu Casa</h3>
            <p>Envios en tiempo y forma a tu casa.</p>
        </div>
        <div class ="contenidoPastilla">
             <i class="bi bi-credit-card-2-back"></i>
            <h3>Tarjetas de Credito</h3>
            <p>Aceptamos tarjetas de credito y debito.</p>
        </div>
        <div class ="contenidoPastilla">
            <i class="bi bi-emoji-smile"></i>
            <h3>Clientes Satisfechos</h3>
            <p>Tu beneficio siempre sera nuestra prioridad.</p>
        </div>
    </div>
    <div class="productos">
        @foreach($articulos as $articulo)
    
        
            <div class="articuloCard">
                <img src="/images/fedoraTest.png" alt="Imagen">
                <div class="articuloDetalles">
                    <span>{{$articulo->nombreProducto}}</span>
                    <span>{{$articulo->descripcion}}</span>
                    <span>${{$articulo->precio}}</span>
                    @auth
                    <form action="{{ route('cart.store') }}" method="POST">
                    {{ method_field('POST') }}
                    @csrf
                        <input type="hidden" value="{{ $articulo->id }}" id="id" name="id">
                        <input type="hidden" value="{{ $articulo->nombreProducto }}" id="nombreProducto" name="nombreProducto">
                        <input type="hidden" value="{{ $articulo->precio }}" id="precio" name="precio">
                        <input type="hidden" value="1" id="quantity" name="quantity">
                        <div class="card-footer" style="background-color: white;">
                            <div class="row">
                                <button class="btn btn-success btn-sm" class="tooltip-test" title="add to cart">
                                    <i class="bi bi-plus-circle"></i> Añadir
                                </button>
                            </div>
                        </div>
                    </form>
                    @endauth
                </div>
            </div>
        
        @endforeach
    </div>
    <footer>
<div class="footerUno">


<h4 class="hGrande">Politica de Privacidad</h4>
<ul>
    <li><a href="#">Terminos de Servicio</a></li>
    <li><a href="#">Terminos de uso de contenido generado por el usuario</a></li>
</ul>


</div>

<div class="footerUno">


<h4 class="hGrande">Nuestro Contacto</h4>
<ul>
    <li>Telefono: <a href="tel:+20123456789">+2 012 345 6789</a></li>
    <li>Email: <a href="mailto:"> ricardo.vitali@davinci.edu.ar</a></li>
</ul>

</div>

<div id="redesSociales">
<ul>
    <li><a href="#"><span class="bi bi-twitter"></span></a></li>
    <li><a href="#"><span class="bi bi-instagram"></span></a></li>
    <li><a href="#"><span class="bi bi-facebook"></span></a></li>
</ul>
<p>Derechos de autor &copy; 2019</p>
</div>

</footer>

</div>
@endsection
