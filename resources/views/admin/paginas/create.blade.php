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
            <input type="text" class="form-control" id="titulo" name="titulo" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Imagen (opcional)</label>
            <input type="file" class="form-control" id="" name="imagen">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripción (opcional)</label>
            <input type="text" class="form-control" id="" name="descripcion">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{route('paginas.index')}}" class="btn btn-light">Regresar</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

<script>
    $(document).ready( function() {
        $('#titulo').stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });
</script>
@endsection
