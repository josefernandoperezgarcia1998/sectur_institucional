@extends('plantilla.general')

@section('title_page')
    Subcategorías
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
                <li class="breadcrumb-item active" aria-current="page">Subcategorías</li>
            </ol>
        </nav>

        {{-- Botones superiores --}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <a href="{{ route('subcategory.create') }}" class="btn btn-primary btn-sm">Nueva subcategoría</a>
            <div>
                {{-- <a href="" class="btn btn-primary btn-sm float-right" id="">Avanzado</a> --}}
            </div>
        </div>

        {{-- Contenido --}}
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Subcategoría</h4>
                <p class="card-category">Listado de subcategorías registradas dentro del sistema</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Imagen</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @forelse ($subcategory as $subcategories)
                            <tr>
                                <td>{{ $subcategories->name }}</td>
                                <td>{{ $subcategories->category->name }}</td>
                                <td><img src="{{asset('storage').'/'.$subcategories->imagen}}" alt="imagen_category" class="img-thumnail" height="50" width="50"></td>
                                <td class="-b-expander -b-text-undexpanded">{{ $subcategories->description }}</td>
                                <td class="text-primary">
                                    <a href="{{ route('subcategory.show', $subcategories->id) }}" class="btn btn-info btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-eye" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path
                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('subcategory.edit', $subcategories->id) }}" class="btn btn-warning btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path
                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('subcategory.destroy', $subcategories->id) }}" method="POST"
                                        style="display: inline-block;"
                                        onsubmit="return confirm('¿Estas seguro de eliminar esta subcategoria?')">
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
                    {{ $subcategory->links() }}
                </div>
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
