@extends('layouts.front')
@section('title')
    Mis compras
@endsection

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">
                    <h4>Mi historial</h4>
                </div>

                <div class="card-body">

                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Fecha de orden</th>
                        <th>Numero de tracking</th>
                        <th>Total</th>
                        <th>Estatus</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $item)
                    <tr>
                            <td>{{ date('d-m-y', strtotime($item->created_at)) }}</td>
                            <td>{{ $item->tracking_no }}</td>
                            <td>{{ $item->total_price }}</td>
                            <td>{{ $item->status == '0' ?'Pendiente' : 'Entregada' }}</td>
                            <td>
                                <a href="{{ url('view-order/'.$item->id) }}" class="btn btn-secondary">Ver orden</a>
                            </td>
                        </tr>
                    @endforeach
                        
                         </tbody>
                     </table>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
