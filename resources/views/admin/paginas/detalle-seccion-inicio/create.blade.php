@extends('plantilla.general')

@section('title_page')
Nueva seccion
@endsection

@section('content_page')

@if($errors->any())
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{$errors->first()}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container">
    <form action="{{ route('detalle-seccion-inicio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Título (opcional) </label>
            <input type="text" class="form-control" id="" name="titulo">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripción (opcional)</label>
            <input type="text" class="form-control" id="" name="descripcion">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Activo</label>
            <select class="custom-select custom-select-lg mb-3" name="activo"  >
                <option value="" selected>Seleccionar...</option>
                <option {{ old('activo') == 'No' ? 'selected' : '' }} value="N">No</option>
                <option {{ old('activo') == 'Si' ? 'selected' : '' }} value="Si">Si</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="" name="imagen">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enlace</label>
            <input type="text" class="form-control" id="" name="enlace">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{route('inicio-detalle')}}" class="btn btn-light">Regresar</a>
    </form>
</div>


@endsection