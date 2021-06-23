@if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-3">
                <img src="/images/fedoraTest.png" alt="Imagen" style="width: 50px; height: 50px;">
                       
                </div>
                <div class="col-lg-6">
                    <b>{{$item->nombreProducto}}</b>
                    <br><small>Cantidad: {{$item->quantity}}</small>
                </div>
                <div class="col-lg-3">
                    <p>${{ \Cart::get($item->id)->getPriceSum() }}</p>
                </div>
                <hr>
            </div>
        </li>
    @endforeach
    <br>
    <li class="list-group-item">
        <div class="row">
            <div class="col-lg-10">
                <b>Total: </b>${{ \Cart::getTotal() }}
            </div>
            <div class="col-lg-2">
                <form action="{{ route('cart.clear') }}" method="POST">
                {{ method_field('POST') }}
                @csrf
                    <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                </form>
            </div>
        </div>
    </li>
    <br>
    <div class="row" style="margin: 0px;">
        <a class="btn btn-secondary btn-sm btn-block" href="{{ route('cart.index') }}">
            CARRITO <i class="bi bi-arrow-right-circle"></i>
        </a>
        <a class="btn btn-success btn-sm btn-block" href="/checkout">
            COMPRAR <i class="bi bi-arrow-right-circle"></i>
        </a>
    </div>
@else
    <li class="list-group-item">El carro esta vacio</li>
@endif

