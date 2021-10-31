@extends('plantilla.Pmostrar')
@extends('plantilla.header')

@section('Titulo', 'mostrar')
@section('Contenido')
<header>
    @section('header')
    
</header>
    <div class="contenedor">
        <h1>Productos</h1>
        <hr>
        <ul class="produc">
            @foreach ($productos as $producto)
                <li><a href="{{ route('unico') }}">{{ $producto->name }}</a></li>
                
            @endforeach
        </ul>
    </div>
@endsection