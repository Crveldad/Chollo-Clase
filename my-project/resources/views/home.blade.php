@extends('inicio')

@section('home')
<div class="contenedor">
    @if ('session')
        <h2 class="home"><a href="{{route('inicio')}}">{{ Auth::user()->name }} is logged in!</a></h2>
    @endif
</div>
@endsection
