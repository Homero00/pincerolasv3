@extends('layouts.front')
@section('title')
    Orden
    @endsection
@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header bg-danger">
                    <h4>Entregas
                        <a href="{{ url('orders') }}" class="btn btn-warning text-white float-end">Nueva orden</a>
                    </h4>
                </div>

                <div class="card-body">

                <div class="row">
                    <div class="col-md-6 order-details">
                        <h4>Detalles de compra</h4>
                        <hr>
                            <label for="">Nombre</label>
                            <div class="border p-2"> {{ $orders->fname }} </div>
                            <label for="">Apellidos</label>
                            <div class="border p-2"> {{ $orders->lname }} </div>
                            <label for="">Correo</label>
                            <div class="border p-2"> {{ $orders->email }} </div>
                            <label for="">Telefono</label>
                            <div class="border p-2"> {{ $orders->phone }} </div>
                            <label for="">Direccion</label>
                            <div class="border p-2"> 
                                {{ $orders->address1 }}, 
                                {{ $orders->address2 }},
                                {{ $orders->city }},
                                {{ $orders->state }},
                                {{ $orders->country }},
                              </div>
                              <label for="">Codigo Postal</label>
                            <div class="border p-2"> {{ $orders->pincode }} </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Detalles de orden</h4>
                        <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                                    @foreach($orders->orderitems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->price}}</td>
                                            <td>
                                                <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="50px" alt="Imagen de producto">
                                            </td>
                                        </tr>
                                    @endforeach
                                        
                                </tbody>
                            </table>
                            <h4 class="px-2">Total: <span class="float-end">{{ $orders->total_price }}</span> </h4>
                           <div class="mt-5 px-2">
                                <label for="">Estatus de orden</label>
                                <form action="{{ url('update-order/'.$orders->id) }}" method="POST">
                                @csrf    
                                @method('PUT')
                                <select class="form-select" name="order_status">
                                    <option {{ $orders->status == '0'? 'selected':'' }} value="0">Pendiente</option>
                                    <option {{ $orders->status == '1'? 'selected':'' }}  value="1">Entregado</option>
                                </select> 
                                <button type="submit" class="btn btn-danger float-end mt-3">Actualizar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
