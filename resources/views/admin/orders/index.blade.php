@extends('layouts.admin')

@section('title')
    Ordenes
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
             
        <div class="card">
                <div class="card-header">
                    <h4>Historial de compras</h4>
                    <a href="{{ 'order-history' }}" class="btn btn-warning float-end">Ventas Completas</a>
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
                                <a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-secondary">Ver orden</a>
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