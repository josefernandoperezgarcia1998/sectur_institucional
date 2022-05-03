<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetalleSeccionInicio;

class InicioFrontController extends Controller
{
    public function index()
    {
        $data1 = DetalleSeccionInicio::where('seccion_id','=',1)
                    ->orderBy('id', 'asc')
                    ->where('activo', '=', 'Si')
                    ->get();

        $data2 = DetalleSeccionInicio::where('seccion_id','=',2)
                    ->orderBy('id', 'asc')
                    ->where('activo', '=', 'Si')
                    ->get();

        $data3 = DetalleSeccionInicio::where('seccion_id','=',3)
                    ->orderBy('id', 'asc')
                    ->where('activo', '=', 'Si')
                    ->get();

        $data4 = DetalleSeccionInicio::where('seccion_id','=',4)
                    ->orderBy('id', 'asc')
                    ->where('activo', '=', 'Si')
                    ->get();

        $data5 = DetalleSeccionInicio::where('seccion_id','=',5)
                    ->orderBy('id', 'asc')
                    ->where('activo', '=', 'Si')
                    ->get();

        $data6 = DetalleSeccionInicio::where('seccion_id','=',8)
                    ->orderBy('id', 'asc')
                    ->where('activo', '=', 'Si')
                    ->get();
        
        //dd($ca);

        // dd($data1);
        // LazyLoad
        // Nueva columna order
        // $detalle = New DetalleSEccionInicio();
        // $results = $detalle->all();
        // $results->load('baner');
        
        return view('inicio.inicio', compact('data1', 'data2', 'data3', 'data4', 'data5', 'data6'));
    }
}
