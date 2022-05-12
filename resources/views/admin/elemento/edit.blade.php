@extends('plantilla.general')

@section('title_page')
Editar elemento
@endsection

@section('content_page')
<style>
    .-b-text-undexpanded {
        display: -webkit-box;
        height: 105.2px;
        -webkit-line-clamp: 5;
        /* Número de líneas */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1.3;
    }

    .-b-expander {
        cursor: pointer;
        line-height: 1.3;
    }

    @media (min-width: 600px) {
        .ancho {
            width: 50%;
        }
    }

</style>
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('success')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if($errors->any())
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{$errors->first()}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<form action="{{ route('elementos.update', $elemento->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required autocomplete="off"
            value="{{ old('titulo', $elemento->titulo) }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Sección</label>
        <select class="form-select" aria-label="Default select example" name="seccion_id">
            <option selected value="seccion_id">Selecciona una sección</option>
            @foreach ($secciones as $seccion)
            <option value="{{ $seccion->id }}" @if ($elemento->seccion_id === $seccion->id || old('seccion_id') ===
                $seccion->id) selected @endif>{{ $seccion->titulo }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" rows="3"
            name="descripcion">{!!old('descripcion' , $elemento->descripcion )!!}</textarea>
    </div>
    <div class="mb-3  -b-expander -b-text-undexpanded">
        <label for="exampleFormControlInput1" class="form-label">Imagen</label>
        @if (is_null($elemento->imagen))
        <br><small>Sin imagen</small>
        @else
        <div class=" -b-expander -b-text-undexpanded">
                <img src="{{asset('storage').'/'.$elemento->imagen}}" alt="imagen" class="img-fluid rounded mx-auto d-block">
                <small><strong>Tamaño: </strong>{{ $elemento->size_image }}</small>
                <small><strong>Archivo: </strong>{{ $elemento->type_image }}</small>
        </div>
        @endif
        <input class="form-control" id="imagen" placeholder="" type="file" name="imagen">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Documento</label>
        @if (is_null($elemento->documento))
        <small>Sin documento</small>
        @else
        <div class="">
            <div class="row justify-content-center  -b-expander -b-text-undexpanded">
                <iframe src="{{asset('storage').'/'.$elemento->documento}}" width="50%" height="600">
                        This browser does not support PDFs. Please download the PDF to view it: <a href="{{asset('storage').'/'.$elemento->documento}}">Descargar PDF</a>
                </iframe>
            </div>
            <small><strong>Tamaño: </strong>{{ $elemento->size_document }}</small>
            <small><strong>Archivo: </strong>{{ $elemento->type_document }}</small>
        </div>
        @endif
        <input class="form-control" id="documento" placeholder="" type="file" name="documento">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Enlace</label>
        <input type="text" class="form-control" id="enlace" name="enlace" autocomplete="off"
            value="{{ old('enlace', $elemento->enlace) }}">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
    <a href="{{ route('secciones.show', $elemento->seccion_id) }}" class="btn btn-secondary btn-sm">Volver</a>
</form>

{{-- Sript para Tiny Editor --}}
<script src="https://cdn.tiny.cloud/1/uemybo7vcmvlukd1pi1rot1vv0tb595tjbjnhmyz9crd29s3/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea#descripcion',
    })

</script>

<script>
    document.querySelectorAll(".-b-expander").forEach(function (el) {
        el.addEventListener("click", () => {
            el.classList.toggle("-b-text-undexpanded");
        });
    });
</script>
@endsection
