@extends('plantilla.general')

@section('title_page')
Mostrar Categoría
@endsection

@section('content_page')
{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Categoría</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mostrar</li>
    </ol>
</nav>
<form action="" method="" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre categoría</label>
        <input type="text" class="form-control" id="" placeholder="" name="name" value="{{ $category->name }}" disabled>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripción</label>
        <textarea aria-disabled="true" type="text" class="form-control" placeholder="" id="editor" style="height: 100px"
            name="description" disabled="disabled">{{ $category->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen</label>
        <img src="/fotos/category/{{$category->imagen}}" alt="imagen_category" class="img-fluid">
    </div>
    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-sm">Editar</a>
    <a href="{{ route('category.index') }}" class="btn btn-secondary btn-sm">Volver</a>
</form>

@endsection
