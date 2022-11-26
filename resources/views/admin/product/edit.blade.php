@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
        <h1>Editar Producto</h1>
        </div>
        <div class="card-body">
           <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
           @method('PUT')
           @csrf
           <div class="col-md-12 mb-3">

                <select class="form-select" >
                    <option value="">{{ $products->category->name }}</option>
                </select>

           </div>
           <div class="div-row">
                <div class="col-md-6 mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" value="{{ $products->name }}" name="name">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" value="{{ $products->slug }}" name="slug">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Pequeña Descripcion</label>
                     <textarea name="description"  rows="3" class="form-control">{{ $products->small_description }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Descripcion</label>
                     <textarea name="description"  rows="3" class="form-control">{{ $products->description }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Precio Original</label>
                     <input name="original_price" class="form-control" value="{{ $products->original_price }}" type="number">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Precio de venta</label>
                     <input name="selling_price" class="form-control" value="{{ $products->selling_price }}" type="number">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">TAX</label>
                     <input name="tax" class="form-control" value="{{ $products->tax }}" type="number">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Cantidad</label>
                     <input name="qty" class="form-control" value="{{ $products->qty }}" type="number">
                </div>


                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" {{ $products->status == "1" ? 'checked' : '' }} name="status">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" {{ $products->trending == "1" ? 'checked' : '' }} name="trending">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Titulo meta</label>
                    <input type="text" class="form-control" value="{{ $products->meta_title }}" name="meta_title">
                </div>
                       <div class="col-md-6 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea type="text" class="form-control" name="meta_keywords">{{ $products->meta_keywords }}</textarea>
                </div>


                <div class="col-md-12 mb-3">
                    <label for="">Descripción Meta</label>
                    <textarea name="meta_description"  rows="3" class="form-control">{{ $products->meta_description }}</textarea>
                </div>
                    @if($products->image)
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="">
                    @endif
                <div class="col-md-12 mb-3">
                    <input type="file" name="image" class="form-control">
                </div> 
                <br>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
           </form>
        </div>
    </div>
@endsection