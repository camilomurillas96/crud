
@extends('plantilla.Pcrear')
@extends('plantilla.header')

@section('Titulo', 'Crea tu Producto')
@section('Contenido')
<header>    
   @section('header')
</header>
    <div class="contenedor">
        <form action="{{route('producto.store')}}" method="post">
            <h1>Ingrese el producto</h1>
            <hr>
            <br><br>
            @csrf
            @method('put')
            <label for="">Nombre del producto:
                <br>
                <input type="text" name="name">
            </label>
            <br><br>
            <label for="">Tipo de producto:
                <br>
                <input type="text" name="tipo">
            </label>
            <br><br>
            <label for="">Descripcion del producto:
                <br>
                <input type="text" name="descripcion">
            </label>
            <br><br>
            <button type="submit">Crear el producto</button>
        </form>
    </div>
@endsection