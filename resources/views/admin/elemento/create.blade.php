@extends('plantilla.general')

@section('title_page')
Nuevo elemento
@endsection

@section('content_page')
@if($errors->any())
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{$errors->first()}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif




<form action="{{ route('elementos.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Sección</label>
        <select class="form-select" aria-label="Default select example" name="seccion_id">
            <option selected value="seccion_id">Selecciona una sección</option>
            @foreach ($secciones as $seccion)
                <option value="{{$seccion->id}}">{{$seccion->titulo}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen</label>
        <input class="form-control" id="imagen" placeholder="" type="file" name="imagen">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Documento</label>
        <input class="form-control" id="documento" placeholder="" type="file" name="documento">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Enlace</label>
        <input type="text" class="form-control" id="enlace" name="enlace" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Crear</button>
    <a href="{{ route('secciones.index') }}" class="btn btn-secondary btn-sm">Volver</a>
</form>

{{-- Sript para Tiny Editor --}}
<script src="https://cdn.tiny.cloud/1/uemybo7vcmvlukd1pi1rot1vv0tb595tjbjnhmyz9crd29s3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea#descripcion'
    })
</script>
@endsection
