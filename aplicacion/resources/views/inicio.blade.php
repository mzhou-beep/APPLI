@extends('layouts.base')

@section('title', 'Iniciar sesión | APPLI')

@section('content')
<div class="login-container">
<main id="login" class="login-card" aria-labelledby="login-title">
    <p class="brand">APPLI</p>
    <h1 id="login-title">Iniciar sesión</h1>
    <p class="subtitle">Introduce tus datos para acceder a tu cuenta.</p>

    {{-- Conectar con una ruta POST /login para procesar la autenticación. --}}
    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <div class="mb-4">
            <label class="form-label" for="email">Correo electrónico</label>
            <input
                type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                id="email"
                name="email"
                value="{{ old('email') }}"
                autocomplete="username"
                placeholder="tu@ejemplo.com"
                required
                @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
            >
            @error('email')
                <p class="invalid-feedback" id="email-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label" for="password">Contraseña</label>
            <input
                type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                id="password"
                name="password"
                autocomplete="current-password"
                required
                @error('password') aria-invalid="true" aria-describedby="password-error" @enderror
            >
            @error('password')
                <p class="invalid-feedback" id="password-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="remember" name="remember" value="1" @checked(old('remember'))>
            <label class="form-check-label" for="remember">Recordarme</label>
        </div>

        <button class="btn btn-brand btn-lg w-100" type="submit">Entrar</button>
    </form>
</main>
</div>
@endsection
