@extends('layouts.adminlte')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
<li class="breadcrumb-item active"><a href="{{route('admin.products')}}">Productos</a></li>
<li class="breadcrumb-item active">Editar</li>
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('css/edit_product.css')}}">
<div class="container">
            <section class="container_section">
                <h1>Editar</h1>
                <div class="datos">
                    {!! Form::open(['url'=> route('products.edit',$product->id)])!!}
                    <div class="container_uno">
                        <input id="name_product" name="name_product" value="{{$product->name_product}}">
                    </div>
                    <div class="label">
                    <label for="date_expiry">Fecha expiracion</label>
                    </div>
                    <div class="container_dos">
                        <input type="date" id="date_expiry" name="date_expiry" value="{{$product->date_expiry}}">
                    </div>
                    <div class="container_tres">
                        <input id="company" name="company" value="{{$product->company}}">
                    </div>
                    <div class="container_boton">
                        <button class="boton">Editar</button>
                    </div>             
                    {!! Form::close() !!}
                </div>              
            </section>
        </div>
@endsection

