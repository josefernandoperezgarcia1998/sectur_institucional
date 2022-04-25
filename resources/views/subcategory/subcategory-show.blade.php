@extends('plantilla.general')

@section('title_page')
Mostrar subcategoría
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
        <li class="breadcrumb-item"><a href="{{ route('subcategory.index') }}">Subcategoría</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mostrar</li>
    </ol>
</nav>
<form action="" method="" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre subcategoría</label>
        <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{ $subcategory->name }}" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" placeholder="" name="slug" value="{{ $subcategory->slug }}" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripción</label>
        <textarea class="form-control" placeholder="" id="" style="height: 100px" name="description" disabled>{{ $subcategory->description }}"</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Categoría</label>
        <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{ $subcategory->category->name }}" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen</label>
        <img class="img-fluid" src="{{asset('storage').'/'.$subcategory->imagen}}" alt="imagen_category" class="img-thumnail" height="100" width="100">
    </div>
    <a href="{{ route('subcategory.edit', $subcategory->id) }}" class="btn btn-primary btn-sm">Editar</a>
    <a href="{{ route('subcategory.index') }}" class="btn btn-secondary btn-sm">Volver</a>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

@endsection
