@extends('layouts.adminlte')
@section('breadcrumb')
<li class="breadcrumb-item active"><a href="{{route('users')}}">Usuarios</a></li>
<li class="breadcrumb-item active">Añadir</li>
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('css/add.css')}}">
<div class="container">
            <section class="container_section">
                <h1>Añadir</h1>
                <div class="datos">
                    {!! Form::open(['url'=> route('users.add')])!!}
                    <div class="container_uno">
                        <input id="name" name="name" placeholder="Nombres">
                    </div>
                    <div class="container_dos">
                        <input type="number" id="document_number" name="document_number" placeholder="Documento">
                    </div>
                    <div class="container_tres">
                        <input id="email" name="email" placeholder="Correo">
                    </div>
                    <div class="container_cuatro">
                        <input type="number" id="telephone" name="telephone" placeholder="Teléfono">
                    </div>
                    <div class="container_boton">
                        <button class="boton">Agregar</button>
                    </div>             
                    {!! Form::close() !!}
                </div>              
            </section>
        </div>
@endsection

