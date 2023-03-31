@extends('layouts.adminlte')
@section('breadcrumb')
<li class="breadcrumb-item active"><a href="{{route('admin.products')}}">Productos</a></li>
<li class="breadcrumb-item active">Añadir</li>
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('css/add_product.css')}}">
<div class="container">
            <section class="container_section">
                <h1>Añadir</h1>
                <div class="datos">
                    {!! Form::open(['url'=> route('products.add')])!!}
                    <div class="container_uno">
                        <input id="name_product" name="name_product" placeholder="Nombre">
                    </div>
                    <div class="label">
                    <label for="date_expiry">Fecha expiración</label>
                    </div>
                    <div class="container_dos">
                        <input type="date" id="date_expiry" name="date_expiry">
                    </div>
                    <div class="container_tres">
                        <input id="company" name="company" placeholder="Empresa">
                    </div>
                    <div class="container_boton">
                        <button class="boton">Añadir</button>
                    </div>             
                    {!! Form::close() !!}
                </div>              
            </section>
        </div>
@endsection

