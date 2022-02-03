<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>ChillaSevero</title>
</head>
<body>

    <header>
        <div class="logo">
            <a href="{{ route('inicio') }}"><img src="{{ asset('img/logosev.jpg')}}" height="150"" alt="Logo CS" class="cs"></a>
            <a href="{{ route('inicio') }}"><img src="{{ asset('img/chillasev.jpg')}}" height="150" alt="texto CS"></a>
            <a href="{{ route('inicio') }}"><img src="{{ asset('img/logosev.jpg')}}" height="150"" alt="Logo CS" class="cs"></a>
        </div>
    </header>

    
    <nav>
        <ul>
        @if (Route::has('login'))
            <li><a href="{{ route('login') }}">Login</a></li>
        @endif
            
        @if (Route::has('register'))
            <li><a href="{{ route('register') }}">Register</a></li>
        @endif

            <li>
                <div>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    <div class="contenedor">
        <div>
            @if (session('mensaje'))
                <h2>{{ session('mensaje')}}</h2>
            @endif
        </div>

        <div>   
            @yield('formulario')
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
        <div>
            @yield('home')
        </div>
    </div>


</body>

<footer>
    <div class="foot">
        <div class="info">
            <h2>Información</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="contacto">
            <h2>Contacto</h2>
            <p>ChillaSevero S.L.<br> C/Doctor Fajarnés 19, Local<br> 03204 Elche / Alicante / España<br>678 11 38 70<br> crveldad@hotmail.com
            </p>
        </div>
        <div class="redes">
            <h2>También en</h2>
            <ul class="socialmedia">
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100069452323289"><img src="{{ asset('img/facebook.png') }}" width="50" height="50" alt="Facebook"></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/evisscerador/"><img src="{{ asset('img/instagram.png') }}" width="50" height="50" alt="Instagram"></a>
                </li>
                <li>
                    <a href="https://crueldad.tumblr.com/"><img src="{{ asset('img/tumblr.png') }}" width="50" height="50" alt="Tumblr"></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCHwXtygWE7uY4T0W-0hGJSw"><img src="{{ asset('img/youtube.png') }}" width="50" height="50" alt="Youtube"></a>
                </li>
                <li>
                    <a href="https://twitter.com/?lang=es"><img src="{{ asset('img/gorjeo.png') }}" width="50" height="50" alt="Twitter"></a>
                </li>
            </ul>
        </div>

    </div>
    <div class="er">
        <p><span class="red">Alejandro Andreo Padilla</span> Copyright <span class="red">@</span> {{date('Y')}} <span class="red">ChillaSevero</span></p>
    </div>
</footer>
</html>