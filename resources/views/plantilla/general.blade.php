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

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dist/css/css_dashboard/dashboard.css') }}" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dist/css/css_sidebar/sidebars.css') }}" rel="stylesheet">
</head>

<body>

    
    @include('plantilla.header')

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar/Menú -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    @include('plantilla.sidebar')
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="display-5">@yield('title_page')</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <!-- Content here -->
                        @yield('content_page')
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Esto ya venía en el dashboard template -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('assets/dist/js/js_dashboard/dashboard.js') }}"></script>
    
    
</body>

</html>
