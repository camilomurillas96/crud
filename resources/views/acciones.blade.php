@extends('plantilla.Pmostrar')
@extends('plantilla.header')

@section('Titulo', 'acciones')
@section('Contenido')
    <header>
    @section('header')
    
    </header>
    <div class="contenedor">
        <h1>Productos {{$productos->name}}</h1>
        <hr>
        <p>
            <h1>{{$productos->descripcion}}</h1>
        </p>
    </div>
@endsection