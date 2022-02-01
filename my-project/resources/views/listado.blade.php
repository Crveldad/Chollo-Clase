@extends('inicio')

@section('listado')

<div class="orden">
    <a href="{{ route('formulario') }}">Crear chollos</a>
</div> 
<nav class="cate">
    <ul>
    <li><a href="{{ route('nuevos') }}">Nuevos</a></li>
    <li><a href="{{ route('destacados') }}">Destacados</a></li>
    </ul>
</nav>


    @foreach ($chollos as $chollo)
        <div class="chollo">
            <a href="{{ $chollo -> url }}"><img src="{{ asset("img/".$chollo->id."-chollo-severo.jpg") }}" alt="Chollo"></a>

                <h3><a href="{{ $chollo -> url }}">{{ $chollo -> titulo }}</a></h3>
                <p><span class="precio"> {{ $chollo -> precio }}€ </span>&nbsp; {{ $chollo -> descuento }}€</p>
                <p>{{ $chollo -> descripcion }}</p>
                <a href="{{ $chollo -> url }}"></a>
                <p>Categoría: {{ $chollo -> categoria }}</p>
                <p>Puntuación: {{ $chollo -> puntuacion }}</p>

                <form action="{{ route('chollos.editar', $chollo) }}" method="GET">
                    <button type="submit" class="bot">Editar</button>
                </form>
                <form action="{{ route('chollos.eliminar', $chollo) }}" method="POST" >
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="bot">Eliminar</button>
                </form>

        </div>
    @endforeach

    <div class="pagina">{{ $chollos->links() }}</div> 
@endsection