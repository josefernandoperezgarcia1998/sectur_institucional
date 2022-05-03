@extends('plantilla.general')

@section('title_page')
Crear Sección de Inicio
@endsection

@section('content_page')

<div class="container">
    <form action="{{ route('created-seccion-inicio') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Título</label>
            <input type="text" class="form-control" id="" name="titulo">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{route('inicio-detalle')}}" class="btn btn-light">Regresar</a>
    </form>
</div>

@endsection
