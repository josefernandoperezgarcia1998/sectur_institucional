@extends('plantilla.general')

@section('title_page')
Conócenos crear
@endsection

@section('content_page')
@if($errors->any())
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{$errors->first()}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre categoría</label>
        <input type="text" class="form-control" id="" placeholder="" name="name" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripción</label>
        <textarea class="form-control" placeholder="" id="" style="height: 100px" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen</label>
        <input class="form-control" id="" placeholder="" type="file" name="imagen" >
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Crear</button>
    <a href="{{ route('category.index') }}" class="btn btn-secondary btn-sm">Volver</a>
</form>
@endsection
