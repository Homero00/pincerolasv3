@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detalles de usuario
                       
                        </h4>
                         <a href="{{ url('users') }}" class="btn btn-warning float-right">Regresar</a>
                    <hr>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Rol</label>
                                <div class="p-2 border">{{ $users->role_as == '0'? 'Usuario':'Administrador' }}</div>
                            </div>  
                            <div class="col-md-4 mt-3">  <label for="">Nombre</label>
                                <div class="p-2 border">{{ $users->name }}</div></div>

                              <div class="col-md-4 mt-3"> <label for="">Apellidos</label>
                                <div class="p-2 border">{{ $users->lname }}</div></div>

                                <div class="col-md-4 mt-3"><label for="">Email</label>
                                <div class="p-2 border">{{ $users->email }}</div></div>

                                <div class="col-md-4 mt-3"><label for="">Telefono</label>
                                <div class="p-2 border">{{ $users->phone }}</div></div>

                                <div class="col-md-4 mt-3"> <label for="">Calle 1</label>
                                <div class="p-2 border">{{ $users->address1 }}</div></div>

                                <div class="col-md-4 mt-3"> <label for="">Calle 2</label>
                                <div class="p-2 border">{{ $users->address2 }}</div></div>
                                

                                <div class="col-md-4 mt-3"><label for="">Ciudad</label>
                                <div class="p-2 border">{{ $users->city }}</div></div>
                                <div class="col-md-4 mt-3"> <label for="">Estado</label>
                                <div class="p-2 border">{{ $users->state }}</div></div>
                                <div class="col-md-4 mt-3">  <label for="">Pais</label>
                                <div class="p-2 border">{{ $users->country }}</div></div>
                                <div class="col-md-4 mt-3"><label for="">Codigo Postal</label>
                                <div class="p-2 border">{{ $users->pincode }}</div></div>
                                
                            </div>
                        </div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection