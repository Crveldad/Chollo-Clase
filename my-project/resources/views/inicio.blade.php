<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="{ HTML::style('../css/estilo.css') }}"> -->
    <title>Index</title>
</head>
<body>
    <nav>
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('formulario') }}">Crear chollos</a>
    </nav>
    <h1>Esto es el índice</h1>

    <div>   
        @yield('formulario')
        @if (session('mensaje'))
            <h3>{{ session('mensaje')}}</h3>
        @endif
    </div>

    <div>   
        @yield('editar')
    </div>

    <div>   
        @yield('eliminar')
    </div>

    <div>
        @yield('listado')
    </div>

</body>
</html>