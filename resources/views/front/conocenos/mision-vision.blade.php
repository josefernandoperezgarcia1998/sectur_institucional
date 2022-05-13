@extends('plantilla.front.front-plantilla')

@section('title_page')
    Conócenos
@endsection

@section('contenido')
<div class="shadow p-3 mb-5 bg-white rounded">
    @foreach ($mision_vision as $item)
        <h3 class="display-6">{{$item->titulo}}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('inicio') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('conocenos.index')}}">Conócenos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Misión y Visión</li>
            </ol>
        </nav>
        <p class="lead">{!!$item->descripcion!!}</p>
    @endforeach
    <br>
    <table class="table">
        <tr>
            <th class="table-active">Fuente</th>
            <td>Área de Recursos Humanos</td>
        </tr>
        <tr>
            <th class="table-active">Actualización</th>
            <td>{{$item->updated_at->isoFormat('LLLL'),}}</td>
        </tr>
    </table>
</div>
@endsection