@extends('plantilla.general')

@section('title_page')
Editar Sección de Inicio
@endsection

@section('content_page')

<div class="container">
    <form action="{{ route('actualizar-seccion-inicio', $seccion->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Título</label>
            <input type="text" class="form-control" id="" name="titulo" value="{{old('titulo', $seccion->titulo)}}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{route('inicio-detalle')}}" class="btn btn-light">Regresar</a>
    </form>
</div>

@endsection
