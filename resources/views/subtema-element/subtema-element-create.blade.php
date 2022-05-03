@extends('plantilla.general')

@section('title_page')
Crear elemento
@endsection

@section('content_page')
@if($errors->any())
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{$errors->first()}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('subtema.index') }}">Subtemas</a></li>
        <li class="breadcrumb-item"><a href="{{ route('subTemaElements.index') }}">Elementos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Crear</li>
    </ol>
</nav>
<form action="{{ route('subTemaElements.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Encabezado</label>
        <input type="text" class="form-control" id="name" placeholder="" name="name" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Enlace</label>
        <input type="text" class="form-control" id="link" placeholder="" name="link">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Archivo</label>
        <input class="form-control" id="" placeholder="" type="file" name="document">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen</label>
        <input class="form-control" id="" placeholder="" type="file" name="imagen">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Crear</button>
    <a href="{{ route('subTemaElements.index') }}" class="btn btn-secondary btn-sm">Volver</a>
</form>
@endsection
