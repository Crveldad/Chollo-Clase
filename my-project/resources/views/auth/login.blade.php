@extends('inicio')

@section('content')

    <form method="POST" action="{{ route('login') }}" class="formulario">
        @csrf
        <fieldset>
            <legend>Login:</legend>
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><br>

        @error('email')
            <strong>{{ $message }}</strong>
        @enderror

            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><br>

        @error('password')
            <strong>{{ $message }}</strong>
        @enderror

        
        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><br>

            <button type="submit" class="bot">
                    {{ __('Login') }}
            </button>

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                     {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </fieldset>
    </form>
    <div class="vacio"></div>

@endsection
