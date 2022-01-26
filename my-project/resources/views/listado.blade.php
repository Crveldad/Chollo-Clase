@extends('inicio')

@section('listado')
    <h1>Listado de los chollos</h1>

    @foreach ($chollos as $chollo)
        <div class="chollo">
            <img src="{{ asset("img/5-chollo-severo.jpg") }}" alt="Chollo">
            <!--<img src="{ asset("img/".$chollo->id."-chollo-severo.jpg") }}" alt="Chollo">-->
            <ul>
                <li>ID: {{ $chollo -> id }}</li>
                <li>Título: {{ $chollo -> titulo }}</li>
                <li>Descripción: {{ $chollo -> descripcion }}</li>
                <li>URL: {{ $chollo -> url }}</li>
                <li>Categoría: {{ $chollo -> categoria }}</li>
                <li>Puntuación: {{ $chollo -> puntuacion }}</li>
                <li>Precio: {{ $chollo -> precio }}</li>
                <li>Precio de descuento: {{ $chollo -> descuento }}</li>
            </ul>

                <form action="{{ route('chollos.editar', $chollo) }}" method="GET" class="d-inline">
                    <button type="submit">Editar</button>
                </form>
                <form action="{{ route('chollos.eliminar', $chollo) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Eliminar</button>
                  </form>
        </div>
    @endforeach

@endsection