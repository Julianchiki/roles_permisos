@extends('layouts.adminlte')
@section('breadcrumb')
<li class="breadcrumb-item active"><a href="{{route('users')}}">{{trans('usuarios.users')}}</a></li>
<li class="breadcrumb-item active">Editar</li>
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('css/add.css')}}">
<div class="container">
            <section class="container_section">
                <h1>Editar</h1>
                <div class="datos">
                    {!! Form::open(['url'=> route('users.edit',$users->id)])!!}
                    <div class="container_uno">
                        <input id="name" name="name" value="{{$users->name}}">
                    </div>
                    <div class="container_dos">
                        <input type="number" id="document_number" name="document_number" value="{{$users->document_number}}">
                    </div>
                    <div class="container_tres">
                        <input id="email" name="email" value="{{$users->email}}">
                    </div>
                    <div class="container_cuatro">
                        <input type="number" id="telephone" name="telephone" value="{{$users->telephone}}">
                    </div>
                    <div class="container_boton">
                        <button class="boton">Editar</button>
                    </div>             
                    {!! Form::close() !!}
                </div>              
            </section>
        </div>
@endsection

