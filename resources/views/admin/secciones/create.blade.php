@extends('plantilla.general')

@section('title_page')
Crear sección
@endsection

@section('content_page')

<form action="{{ route('secciones.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="titulo" placeholder="" name="titulo" required autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" placeholder="" name="slug" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Página</label>
        <select class="form-select" aria-label="Default select example" name="pagina_id">
            <option selected value="pagina_id">Selecciona una página</option>
            @foreach ($paginas as $pagina)
                <option value="{{$pagina->id}}">{{$pagina->titulo}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Crear</button>
    <a href="{{ route('secciones.index') }}" class="btn btn-secondary btn-sm">Volver</a>
</form>

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
