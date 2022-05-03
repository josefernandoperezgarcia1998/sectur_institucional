@extends('plantilla.general')

@section('title_page')
Páginas
@endsection

@section('content_page')
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('success')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <a href="{{ route('paginas.create') }}" class="btn btn-primary btn-sm">Nueva página</a>
    <div>
        {{-- <a href="" class="btn btn-primary btn-sm float-right" id="">Avanzado</a> --}}
    </div>
</div>
<table class="table table-hover shadow p-3 mb-5 bg-body rounded">
    <colgroup></colgroup>
    <thead class="">
        <tr class="">
            <h6 class="text-muted">Página</h6>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-3 py-3">Inicio</td>
            <td>
                <a href="{{route('inicio-detalle')}}" type="button" class="btn btn-light float-sm-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                    <span>Detalles</a>
                </button>
            </td>
        </tr>
        @forelse ($paginas as $pagina)
        <tr>
            <td class="px-3 py-3">{{$pagina->titulo}}</td>
            <td>
                <a href="{{route('paginas.show', $pagina->id)}}" type="button" class="btn btn-light float-sm-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                    <span>Detalles</a>
                </button>
            </td>
        </tr>
        @empty
        @endforelse
        
    </tbody>
</table>
@endsection
