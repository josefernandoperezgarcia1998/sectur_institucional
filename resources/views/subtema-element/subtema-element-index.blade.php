@extends('plantilla.general')

@section('title_page')
    Elementos
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
</style>
    @if (session('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('mensaje')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="col-md-12">
        {{-- Breadcrumb --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('subtema.index') }}">Subtemas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Elementos</li>
            </ol>
        </nav>

        {{-- Botones superiores --}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <a href="{{ route('subTemaElements.create') }}" class="btn btn-primary btn-sm">Nuevo elemento</a>
            <div>
                {{-- <a href="" class="btn btn-primary btn-sm float-right" id="">Avanzado</a> --}}
            </div>
        </div>

        {{-- Contenido --}}
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Elementos</h4>
                <p class="card-category">Listado de elementos</p>
            </div>
            <div class="card-body">
                @if (count($subtemaElementos) > 0)
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Nombre</th>
                            <th>Subtema</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @forelse ($subtemaElementos as $subtemaElemento)
                            <tr>
                                <td>{{ $subtemaElemento->name }}</td>
                                <td>{{ $subtemaElemento->subtema->name }}</td>
                                <td class="text-primary">
                                    <a href="{{ route('subTemaElements.edit', $subtemaElemento->id) }}" class="btn btn-warning btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path
                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('subTemaElements.destroy', $subtemaElemento->id) }}" method="POST"
                                        style="display: inline-block;"
                                        onsubmit="return confirm('¿Estas seguro de eliminar este elemento?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit" rel="tooltip">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-primary">No hay registros</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- {{ $subtemas->links() }} --}}
                </div>
                @else
                    <p>No hay registros</p>
                @endif
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    document.querySelectorAll(".-b-expander").forEach(function (el) {
        el.addEventListener("click", () => {
            el.classList.toggle("-b-text-undexpanded");
        });
    });
</script>

@endsection
