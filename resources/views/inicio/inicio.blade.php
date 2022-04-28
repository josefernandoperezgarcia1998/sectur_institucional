<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo_sectur_favicon.ico') }}">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Secretaría de Turismo - @yield('title_page')</title>
    <!-- CSS CDN for Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .no_view{
            opacity: 1;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }

            .no_view{
                opacity: 0;
            }

        }

    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dist/css/css_dashboard/dashboard.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dist/css/css_sidebar/sidebars.css') }}" rel="stylesheet">
</head>

<body>


    @include('plantilla.header-public')

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar/Menú -->
            <nav id="sidebarMenu" class="no_view col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    @include('plantilla.sidebar-public')
                </div>
            </nav>

            <main class="col-md-12">
                {{-- <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Inicio</h1>
                </div> --}}


                <div class="container">
                    {{-- Section 1 --}}
                    <div class="row justify-content-md-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="http://www.turismochiapas.gob.mx/institucional/media/inicio/banner-contacto-limpio.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="http://www.turismochiapas.gob.mx/institucional/media/inicio/banner-gaceta-1.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="http://www.turismochiapas.gob.mx/institucional/media/inicio/banner-integridadpublica.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="http://www.turismochiapas.gob.mx/institucional/media/inicio/banner-contacto-limpio.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <br><br>

                    {{-- Section 2 --}}
                    <div class="row justify-content-md-center text-center">
                        <h1 class="display-6">Transparencia</h1>
                        <div class="col-6 col-md-4">
                            <div class="card">
                                <img src="http://www.turismochiapas.gob.mx/institucional/media/inicio/banner-pnt.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Card title</h5> --}}
                                    <p class="card-text">This is a longer card with supporting text..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card">
                                <img src="http://www.turismochiapas.gob.mx/institucional/media/inicio/banner-consulta.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Card title</h5> --}}
                                    <p class="card-text">This is a longer card with supporting text..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card">
                                <img src="http://www.turismochiapas.gob.mx/institucional/media/inicio/banner-consulta-fidetur.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">This is a longer card with supporting text..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>

                    {{-- Section 3 --}}
                    <div class="row justify-content-md-center text-center">
                        <h1 class="display-6">Promoción</h1>
                        <div class="col">
                            <img src="http://www.turismochiapas.gob.mx/institucional/media/portada/banners/boton-descargables.png"
                                alt="">
                        </div>
                        <div class="col">
                            <img src="http://www.turismochiapas.gob.mx/institucional/media/portada/banners/boton-rnt.png"
                                alt="">
                        </div>
                        <div class="col">
                            <img src="http://www.turismochiapas.gob.mx/institucional/media/portada/banners/boton-operadores.png"
                                alt="">
                        </div>
                        <div class="col">
                            <img src="http://www.turismochiapas.gob.mx/institucional/media/portada/banners/boton-portal-promocional.png"
                                alt="">
                        </div>
                    </div>
                    <br><br>

                    {{-- Section 4 --}}
                    <div class="row justify-content-md-center text-center">
                        <h1 class="display-6">Estatal</h1>
                        <div class="col">
                            <div class="row justify-content-md-center text-center">
                                <div class="col-6 col-md-6">
                                    <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators1"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators1"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="http://www.turismochiapas.gob.mx/institucional/media/inicio/banner-triptico.jpg"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="http://www.turismochiapas.gob.mx/institucional/media/inicio/Banner-500x177px.jpg"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators2"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators2"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="http://www.turismochiapas.gob.mx/institucional/media/portada/banners/banner-descargar-mapas.jpg"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="http://www.turismochiapas.gob.mx/institucional/media/inicio/banner-escuelas-resilentes.jpg"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>

                    {{-- Section 5 --}}
                    <div class="row justify-content-md-center text-center">
                        <h1 class="display-6">Secretaría</h1>
                        <div class="col">
                            <img src="http://www.turismochiapas.gob.mx/institucional/media/portada/promo/ley.jpg"
                                alt="">
                        </div>
                        <div class="col">
                            <img src="http://www.turismochiapas.gob.mx/institucional/media/portada/promo/conducta.jpg"
                                alt="">
                        </div>
                        <div class="col">
                            <img src="http://www.turismochiapas.gob.mx/institucional/media/portada/promo/estadisticas.jpg"
                                alt="">
                        </div>
                        <div class="col">
                            <img src="http://www.turismochiapas.gob.mx/institucional/media/portada/promo/banner-violencia-genero.jpg"
                                alt="">
                        </div>
                    </div>

                </div>
            </main>
            {{-- Footer --}}
            <div class="container col-16 bg-dark">
                <footer class="py-5">
                    <div class="row">
                        <div class="col offset-1">
                            <div class="col">
                                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3  bg-dark" href="#"><img
                                        class="img-fluid bg-dark" src="{{asset('assets/img/logo_sectur.png')}}"
                                        alt="logo_sectur"></a>
                            </div>
                            <div class="col">
                                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-dark" href="#"><img
                                        class="img-fluid bg-dark"
                                        src="http://www.turismochiapas.gob.mx/institucional/media/theme/icon-footer2.png"
                                        alt="logo_sectur"></a>
                            </div>
                        </div>
                        <div class="col float-sm-start">
                            <h5 class=" text-white">Secretaría de Turismo</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-muted text-white">Conócenos</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-muted text-white">Directorio de funcionarios</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-white">Portal
                                        promocional Visit Chiapas</a></li>
                            </ul>
                        </div>
                        <div class="col float-sm-start">
                            <h5 class="text-white">Contáctanos</h5>
                            <h6 class="text-white">Secretaría de Turismo</h6>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-white">Torre
                                        Chiapas Nivel 5</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-white">Tuxtla
                                        Gutiérrez, CP 29045</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-white">+52
                                        (961) 6170550</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-muted text-white">turismo@turismochiapas.gob.mx</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col float-sm-start">
                            <h5 class=" text-white">Recursos del Portal</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-white">Gaceta
                                        digital informativa</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-muted text-white">Boletines informativos</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-muted text-white">Contacto Limpio Chiapas</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-white">Quejas
                                        e incorfomidades</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-muted text-white">Contacto</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col float-sm-start">
                            <h5 class="text-white">Sígenos</h5>
                            <ul class="nav col-8 d-flex">
                                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                                            <use xlink:href="#twitter" /></svg></a></li>
                                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                                            <use xlink:href="#instagram" /></svg></a></li>
                                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                                            <use xlink:href="#facebook" /></svg></a></li>
                                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                                            <use xlink:href="#youtube" /></svg></a></li>
                            </ul>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="bootstrap" viewBox="0 0 118 94">
                                <title>Bootstrap</title>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
                                </path>
                            </symbol>
                            <symbol id="facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </symbol>
                            <symbol id="instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </symbol>
                            <symbol id="twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </symbol>
                            <symbol id="youtube" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </symbol>
                        </svg>
                    </div>
                    <div class="d-flex justify-content-center py-4 my-4 border-top text-center">
                        <p class="text-white">&copy; 2022 - Secretaría de Turismo</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Esto ya venía en el dashboard template -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/dist/js/js_dashboard/dashboard.js') }}"></script>


</body>

</html>
