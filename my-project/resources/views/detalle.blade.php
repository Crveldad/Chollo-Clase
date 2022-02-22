@extends('inicio')

@section('detalle')
    <h1>Detalle del chollo</h1>

    <h3>ID: {{ $chollo -> id }}</h3>
    <h3>Nombre: {{ $chollo -> titulo }}</h3>
    <h3>Descripción: {{ $chollo -> descripcion }}</h3>    
@endsection