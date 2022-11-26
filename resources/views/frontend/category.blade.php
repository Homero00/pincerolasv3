@extends('layouts.front')
@section('title')
   Categorias
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        Todas las categorias
                    </h1>
                    <div class="row">

                        @foreach ($category as $cate)
                        <div class="col-md-4 mb-3">
                            <a href="{{ url('view-category/'.$cate->slug) }}">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/category/'.$cate->image) }}" alt="Imagen de categorias">
                                <div class="card-body">
                                    <h5>{{ $cate->name }}</h5>
                                    <p>
                                        {{ $cate->description }}
                                    </p>
                                </div>
                            </div></a>
                        </div>
                        @endforeach
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection