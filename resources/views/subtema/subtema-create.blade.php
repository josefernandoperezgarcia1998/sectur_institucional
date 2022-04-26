@extends('plantilla.general')

@section('title_page')
Crear subtema
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
        <li class="breadcrumb-item"><a href="{{ route('subtema.index') }}">Subtema</a></li>
        <li class="breadcrumb-item active" aria-current="page">Crear</li>
    </ol>
</nav>
<form action="{{ route('subtema.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre subtema</label>
        <input type="text" class="form-control" id="name" placeholder="" name="name" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" placeholder="" name="slug">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripción</label>
        <textarea class="form-control" placeholder="" id="" style="height: 100px" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Subcategoría</label>
        <select class="form-select" aria-label="Default select example" name="subcategory_id">
            <option selected value="category_id">Selecciona una subcategoría</option>
            @foreach ($subcategories as $subcategory)
                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Crear</button>
    <a href="{{ route('subtema.index') }}" class="btn btn-secondary btn-sm">Volver</a>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

<script>
    $(document).ready( function() {
        $('#name').stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });
</script>

@endsection
