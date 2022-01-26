@extends('inicio')

@section('listado')
    <h1>Listado de los chollos</h1>

    @foreach ($chollos as $chollo)
        <div class="chollo">
            <ul>
                <li>ID: {{ $chollo -> id }}</li>
                <li>Título: {{ $chollo -> titulo }}</li>
                <li>Descripción: {{ $chollo -> descripcion }}</li>
                <li>URL: {{ $chollo -> url }}</li>
                <li>Categoría: {{ $chollo -> categoria }}</li>
                <li>Puntuación: {{ $chollo -> puntuacion }}</li>
                <li>Precio: {{ $chollo -> precio }}</li>
                <li>Precio de descuento: {{ $chollo -> descuento }}</li>
                <li>Disponible: {{ $chollo -> disponible }}</li>
            </ul>
            <div>
                <button><a href="{{ route('chollos.editar', $chollo) }}" class="btn btn-warning btn-sm">Editar</a></button>
                <form action="{{ route('chollos.eliminar', $chollo) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Eliminar</button>
                  </form>
            </div>
        </div>
    @endforeach

@endsection