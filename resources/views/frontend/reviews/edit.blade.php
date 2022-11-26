@extends('layouts.front')
@section('title', "Editar reseña")
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <h5>Escribir reseña {{ $review->product->name }}</h5>
                        <form action="{{ url('/update-review') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="review_id" value="{{ $review->id }}">
                            <textarea class="form-control" rows="5" name="user_review" placeholder="Escribe tu reseña aqui">{{ $review->user_review }}</textarea>
                            <button type="submit" clasS="btn btn-danger mt-3">Editar reseña</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection