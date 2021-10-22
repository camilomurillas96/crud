@extends('plantilla.Pindex')

@section('Titulo')
@section('Contenido')
<header>
    <nav>
        <ul>
            <li><a href="{{route('producto')}}">Crear Producto</a></li>
            <li><a href="">Productos</a></li>
        </ul>        
    </nav>
    <h1>Bienvenido a la pagina principal</h1>
</header>
    
@endsection