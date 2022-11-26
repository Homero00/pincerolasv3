@extends('layouts.front')
@section('title', "Escribir reseña")
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if($verified_purchase->count() > 0)
                        <h5>Escribir reseña {{ $product->name }}</h5>
                        <form action="{{ url('/add-review') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <textarea class="form-control" rows="5" name="user_review" placeholder="Escribe tu reseña aqui"></textarea>
                            <button type="submit" clasS="btn btn-danger mt-3">Publicar</button>
                        </form>
                    @else
                        <div class="alert alert-danger">
                            <h5>No puedes publicar reseñas</h5>
                            <p>Necesitas comprar el producto para dejar una reseña</p>
                            <a href="{{ url('/') }}" class="btn btn-warning mt-3">Ir al inicio</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection