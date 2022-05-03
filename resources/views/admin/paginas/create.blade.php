@extends('plantilla.general')

@section('title_page')
Crear Página
@endsection

@section('content_page')

<div class="container">
    <form action="{{ route('paginas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Título</label>
            <input type="text" class="form-control" id="" name="titulo">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="" name="imagen">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="" name="descripcion">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{route('paginas.index')}}" class="btn btn-light">Regresar</a>
    </form>
</div>

@endsection
