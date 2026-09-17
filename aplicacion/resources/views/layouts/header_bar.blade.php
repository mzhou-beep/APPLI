<header class="site-header">
    <a class="site-logo" href="{{ route('home') }}" aria-label="APPLI, inicio">
        <img src="{{ asset('logo.png') }}" alt="Logo de la empresa" width="2560" height="965">
    </a>

    <nav class="site-nav" aria-label="Navegación principal">
        <a class="site-nav-link" href="{{ route('home') }}" @if(request()->routeIs('home')) aria-current="page" @endif>Inicio</a>
        <span class="site-nav-link" aria-disabled="true" title="Próximamente">Envío de dinero</span>
        <details class="nav-dropdown">
            <summary>Destinos principales</summary>
            <ul class="site-destinations" aria-label="Destinos">
                <li>Venezuela</li>
                <li>Brasil</li>
                <li>Ecuador</li>
                <li>Colombia</li>
                <li>Nigeria</li>
                <li>Gambia</li>
            </ul>
        </details>
        <span class="site-nav-link" aria-disabled="true" title="Próximamente">Cambio de divisas</span>
        <span class="site-nav-link" aria-disabled="true" title="Próximamente">Nuestras oficinas</span>
    </nav>

    <div class="header-actions">
        <span class="language" aria-label="Idioma: español"><span class="flag-spain" aria-hidden="true"></span> ES</span>
        <a class="access-button" href="{{ route('home') }}#email">Acceder</a>
    </div>
</header>
