@extends('plantilla.general')

@section('title_page')
Conócenos editar
@endsection

@section('content_page')
{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Categoría</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar</li>
    </ol>
</nav>
<form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre categoría</label>
        <input type="text" class="form-control" id="" placeholder="" name="name"  value="{{ old('person_served', $category->name) }}">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripción</label>
        <textarea aria-disabled="true" type="text" class="form-control" placeholder="" id="editor"
            style="height: 100px" name="description">{{ $category->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="" placeholder="" name="imagen">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
    <a href="{{ route('category.index') }}" class="btn btn-secondary btn-sm">Volver</a>
</form>

@endsection
