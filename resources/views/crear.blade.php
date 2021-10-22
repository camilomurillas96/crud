@extends('plantilla.Pcrear')

@section('Titulo', 'Crea tu Producto')
@section('Contenido')
<header>
    <nav>
        <ul>
            <li><a href="">Crear Producto</a></li>
            <li><a href="">Productos</a></li>
        </ul>        
    </nav>
   
</header>
    <form action="" method="post">
        @csrf
        @method('put')
        <label for="">Hola aqui empezaras a crear el formulario de los productos</label>
    </form>
@endsection