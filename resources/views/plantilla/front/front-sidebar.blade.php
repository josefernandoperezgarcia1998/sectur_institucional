<ul class="list-unstyled ps-0">


    @if (Route::is('conocenos.index') || Route::is('conocenos.mision-vision') || Route::is('conocenos.organigrama') )
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
            Conócenos
        </button>
        <div class="collapse" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="{{ route('conocenos.index')}}" class="link-dark rounded">Bienvenida</a></li>
                <li><a href="{{ route('conocenos.mision-vision') }}" class="link-dark rounded">Misión y Visión</a></li>
                <li>
                    <a href="https://blogturismochiapas.tumblr.com/" class="link-dark rounded">
                        Actividades &nbsp;
                        <small>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                            </svg>
                        </small>
                    </a>
                </li>
                <li>
                    <a href="http://www.chiapas.gob.mx/funcionarios/estatal/ejecutivo/secretaria-turismo" class="link-dark rounded">
                        Directorio &nbsp;
                        <small>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                            </svg>
                        </small>
                    </a>
                </li>
                <li><a href="{{ route('conocenos.organigrama')}}" class="link-dark rounded">Organigrama</a></li>
            </ul>
        </div>
    </li>
    @endif
    {{-- @if (Route::is('transparencia'))
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse1" aria-expanded="false">
            Transparencia
        </button>
        <div class="collapse" id="orders-collapse1">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Misión y Visión</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse2" aria-expanded="false">
            SECTUR COVID-19
        </button>
        <div class="collapse" id="orders-collapse2">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse3" aria-expanded="false">
            Normas
        </button>
        <div class="collapse" id="orders-collapse3">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse4" aria-expanded="false">
            Cuenta Pública SECTUR
        </button>
        <div class="collapse" id="orders-collapse4">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse5" aria-expanded="false">
            Convenios
        </button>
        <div class="collapse" id="orders-collapse5">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse6" aria-expanded="false">
            LDF Presupuestal
        </button>
        <div class="collapse" id="orders-collapse6">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse7" aria-expanded="false">
            Cuenta Pública FIDETUR
        </button>
        <div class="collapse" id="orders-collapse7">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse8" aria-expanded="false">
            Licitaciones
        </button>
        <div class="collapse" id="orders-collapse8">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse9" aria-expanded="false">
            Estadísticas
        </button>
        <div class="collapse" id="orders-collapse9">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse10" aria-expanded="false">
            Ayudas y Subsidios
        </button>
        <div class="collapse" id="orders-collapse10">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse11" aria-expanded="false">
            PRODERMAGICO
        </button>
        <div class="collapse" id="orders-collapse11">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse12" aria-expanded="false">
            Otras obras
        </button>
        <div class="collapse" id="orders-collapse12">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Bienvenido</a></li>
            </ul>
        </div>
    </li>
    @endif --}}
    
</ul>
