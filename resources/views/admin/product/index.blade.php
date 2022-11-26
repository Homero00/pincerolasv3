@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Productos</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Nombre</th>
                         <th>Precio original</th>
                         <th>Precio de venta</th>
                         <th>Imagen</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->original_price }}</td>
                        <td>{{ $item->selling_price }}</td>

                        <td>
                            <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="cate-image" alt="Image here"> 
                        </td>

                        <td>
                            <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary">Editar</a>
                            <a class="btn btn-danger" href="{{ url('delete-product/'.$item->id) }}">Eliminar</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection