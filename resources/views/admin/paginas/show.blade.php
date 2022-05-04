@extends('plantilla.general')

@section('title_page')
{{$pagina->titulo}}
@endsection

@section('content_page')
<style>
    .-b-text-undexpanded {
        display: -webkit-box;
        height: 105.2px;
        -webkit-line-clamp: 5;
        /* Número de líneas */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1.3;
    }
    .-b-expander {
        cursor: pointer;
        1 line-height: 1.3;
    }

    @media (min-width: 600px) {
  .ancho {
    width: 50%;
  }
}
</style>

<div class="d-flex justify-content-end flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <a href="{{ route('editar-seccion-inicio', $pagina) }}" class="btn btn-light btn-sm">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil"
            viewBox="0 0 16 16">
            <path
                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
        </svg>
        Editar
    </a>
    &nbsp;
    <form action="{{ route('eliminar-seccion-inicio', $pagina->id) }}" method="POST"
        style="display: inline-block;"
        onsubmit="return confirm('¿Estas seguro de eliminar esta sección de la página?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" type="submit" rel="tooltip">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil"
            viewBox="0 0 16 16">
            <path
                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
        </svg>
        Eliminar
        </button>
    </form>
    <div>
        {{-- <a href="" class="btn btn-primary btn-sm float-right" id="">Avanzado</a> --}}
    </div>
</div>
<div class="container  shadow p-3 mb-5 bg-body rounded">
    <table class="table table-responsive">
        <tbody>
            <tr class="">
                <th class="table-light" colspan="1"><span>Título de la sección</span></th>
            </tr>
            <tr class="">
                <td class="" colspan="1">{{$pagina->titulo}}</td>
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="display-6">Secciones</h1>
    <div>
        <a href="{{route('detalle-seccion-inicio.create')}}" class="btn btn-primary btn-sm float-right" id="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
            Agregar
        </a>
    </div>
</div>

@forelse ($elementosSeccion as $seccion)
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div>
        <h4>Sección {{$loop->iteration}}</h4>
    </div>
    <div>
        <a href="{{ route('detalle-seccion-inicio.edit', $seccion->id) }}" class="btn btn-light btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil"
                viewBox="0 0 16 16">
                <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
            </svg>
            Editar
        </a>
        &nbsp;
        <form action="{{ route('detalle-seccion-inicio.destroy', $seccion->id) }}" method="POST"
            style="display: inline-block;"
            onsubmit="return confirm('¿Estas seguro de eliminar esta sección de inicio?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit" rel="tooltip">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil"
                viewBox="0 0 16 16">
                <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
            </svg>
            Eliminar
            </button>
        </form>
    </div>
</div>
<div class="container  shadow p-3 mb-5 bg-body rounded">
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr class="ancho">
                    <th class="table-light" colspan="1"><span>Título</span></th>
                </tr>
                <tr>
                    <td class="" colspan="2">{{$seccion->titulo}}</td>
                </tr>
                <tr class="">
                    <th class="table-light" colspan="1"><span>Imagen</span></th>
                </tr>
                <tr class="">
                    <td class="" colspan="1"><img src="{{asset('storage').'/'.$seccion->imagen}}" alt="imagen"
                            class="img-fluid rounded mx-auto d-block"></td>
                </tr>
                <tr class="">
                    <th class="table-light" colspan="1"><span>Descripcion</span></th>
                </tr>
                <tr>
                    <td class="-b-expander -b-text-undexpanded" colspan="1">{{$seccion->descripcion}}</td>
                </tr>
                <tr class="">
                    <th class="table-light" colspan="1" ><span>Enlace</span></th>
                </tr>
                <tr>
                    <td class="-b-expander -b-text-undexpanded ancho" colspan="1">{{$seccion->enlace}}</td>
                </tr>
                <tr class="">
                    <th class="table-light" colspan="3"><span>Activo</span></th>
                </tr>
                <tr>
                    <td colspan="1">{{$seccion->activo}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@empty
<div class="container  shadow p-3 mb-5 bg-body rounded">
    <table class="table table-responsive">
        <tbody>
            <tr class="">
                <th class="table-light" colspan="1"><span>Título</span></th>
            </tr>
            <tr class="">
                <td class="" colspan="1">Sin secciones</td>
            </tr>
        </tbody>
    </table>
</div>
@endforelse

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    document.querySelectorAll(".-b-expander").forEach(function (el) {
        el.addEventListener("click", () => {
            el.classList.toggle("-b-text-undexpanded");
        });
    });
</script>

@endsection
