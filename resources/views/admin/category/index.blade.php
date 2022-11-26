@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Categorias</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>ACT</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>

                        <td>
                            <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="cate-image" alt="Image here"> 
                        </td>

                        <td>
                            <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-primary">Editar</a>
                            <a class="btn btn-danger" href="{{ url('delete-category/'.$item->id) }}">Eliminar</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection