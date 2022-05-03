@extends('plantilla.general')

@section('title_page')
Editar seccion
@endsection

@section('content_page')

@if($errors->any())
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{$errors->first()}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container">
    <form action="{{ route('detalle-seccion-inicio.update', $detalleSeccion->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Título (opcional) </label>
            <input type="text" class="form-control" id="" name="titulo" value="{{ old('titulo', $detalleSeccion->titulo) }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripción (opcional)</label>
            <input type="text" class="form-control" id="" name="descripcion" value="{{ old('descripcion', $detalleSeccion->descripcion) }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Activo</label>
            <select class="custom-select" name="activo">
                <option {{ old('activo') == 'No' ? 'selected' : ($detalleSeccion->activo == 'No' ? 'selected' : '') }} value="No">No</option>
                <option {{ old('activo') == 'Si' ? 'selected' : ($detalleSeccion->activo == 'Si' ? 'selected' : '') }} value="Si">Si</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Imagen</label>
            <img src="{{asset('storage').'/'.$detalleSeccion->imagen}}" alt="imagen" class="img-fluid rounded mx-auto d-block">
            <input type="file" class="form-control" id="" name="imagen">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enlace</label>
            <input type="text" class="form-control" id="" name="enlace" value="{{ old('enlace', $detalleSeccion->enlace) }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{route('inicio-detalle')}}" class="btn btn-light">Regresar</a>
    </form>
</div>

@endsection