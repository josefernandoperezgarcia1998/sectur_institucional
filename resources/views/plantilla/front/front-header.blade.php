<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ route('inicio') }}"><img src="{{asset('assets/img/logo_sectur.png')}}" alt="logo_sectur" width="140" height="63"></a>
    <button class="boton" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu2" aria-controls="sidebarMenu2" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu2" aria-controls="sidebarMenu2" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div style="display:block;">
        <ul class="nav nav_header">
            <li class="nav-item effect-hover">
                <a class="nav-link text-white" href="{{ route('inicio') }}">Inicio</a>
            </li>
            <li class="nav-item effect-hover">
                <a class="nav-link text-white" href="{{ route('conocenos.index') }}">Conócenos</a>
            </li>
            <li class="nav-item effect-hover">
                <a class="nav-link text-white" href="#">Marco Jurídico</a>
            </li>
            <li class="nav-item effect-hover">
                <a class="nav-link text-white" href="#">Servicios</a>
            </li>
            <li class="nav-item effect-hover">
                <a class="nav-link text-white" href="#">Transparencia</a>
            </li>
            <li class="nav-item effect-hover">
                <a class="nav-link text-white" href="#">Datos Personales</a>
            </li>
        </ul>
    </div>
</header>