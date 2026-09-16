<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | APPLI</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="site-header">
        <a class="site-logo" href="{{ route('home') }}" aria-label="APPLI, inicio">APPLI</a>

        <nav class="site-nav" aria-label="Navegación principal">
            <a class="nav-link" href="{{ route('home') }}" aria-current="page">Inicio</a>
            <span class="nav-link" aria-disabled="true" title="Próximamente">Envío de dinero</span>
            <details class="nav-dropdown">
                <summary>Destinos principales</summary>
                <ul class="dropdown-menu" aria-label="Destinos">
                    <li>Venezuela</li>
                    <li>Brasil</li>
                    <li>Ecuador</li>
                    <li>Colombia</li>
                    <li>Nigeria</li>
                    <li>Gambia</li>
                </ul>
            </details>
            <span class="nav-link" aria-disabled="true" title="Próximamente">Cambio de divisas</span>
            <span class="nav-link" aria-disabled="true" title="Próximamente">Nuestras oficinas</span>
        </nav>

        <div class="header-actions">
            <span class="language" aria-label="Idioma: español"><span class="flag-spain" aria-hidden="true"></span> ES</span>
            <a class="access-button" href="#email">Acceder</a>
        </div>
    </header>

    <div class="login-container">
    <main id="login" class="login-card" aria-labelledby="login-title">
        <p class="brand">APPLI</p>
        <h1 id="login-title">Iniciar sesión</h1>
        <p class="subtitle">Introduce tus datos para acceder a tu cuenta.</p>

        {{-- Conectar con una ruta POST /login para procesar la autenticación. --}}
        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <div class="field">
                <label for="email">Correo electrónico</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    autocomplete="username"
                    placeholder="tu@ejemplo.com"
                    required
                    @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
                >
                @error('email')
                    <p class="error" id="email-error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="password">Contraseña</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    autocomplete="current-password"
                    required
                    @error('password') aria-invalid="true" aria-describedby="password-error" @enderror
                >
                @error('password')
                    <p class="error" id="password-error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <label class="remember" for="remember">
                <input type="checkbox" id="remember" name="remember" value="1" @checked(old('remember'))>
                Recordarme
            </label>

            <button type="submit">Entrar</button>
        </form>
    </main>
    </div>
</body>
</html>
