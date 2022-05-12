<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\DetalleSeccionInicio;
use Illuminate\Http\Request;

class DetalleSeccionInicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paginas.detalle-seccion-inicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Getting the $id from the section where I am
        $getSeccion_id = Session::get('seccion_id');

        $detalleSeccion_data = $request->all();

        // Validating the data
        $validated = $request->validate([
            'imagen' => 'image|mimes:jpg,png,jpeg',
            'enlace' => 'string',
        ]);

        // Setting the id with the atributte/column of the data
        $detalleSeccion_data['seccion_id'] = Session::get('seccion_id');

        // Validating if the request has an image file
        if($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombre_de_archivo = $imagen->getClientOriginalName();
            $detalleSeccion_data['imagen']= $request->file('imagen')->storeAs('uploads/inicio', $nombre_de_archivo, 'public');
        }

        DetalleSeccionInicio::create($detalleSeccion_data);

        return redirect()->route('seccion-inicio.show', $getSeccion_id)->with('success', 'Seccion de inicio creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleSeccion = DetalleSeccionInicio::findOrFail($id);
        
        return view('admin.paginas.detalle-seccion-inicio.edit', compact('detalleSeccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Getting the $id from the section where I am
        $getSeccion_id = Session::get('seccion_id');

        $seccionInicioData = request()->except('_token','_method');

        // Validating the date_end_service, needs to be equals or after of the date start service
        $validated = $request->validate([
            'imagen' => 'image|mimes:jpg,png,jpeg',
            'enlace' => 'string',
        ]);

        if($request->hasfile('imagen')){
            $imagen = $request->file('imagen');
            $nombre_de_archivo = $imagen->getClientOriginalName();
            $seccionInicio = DetalleSeccionInicio::findOrFail($id);
            Storage::delete('public/'.$seccionInicio->imagen);
            $seccionInicioData['imagen']= $request->file('imagen')->storeAs('uploads/inicio', $nombre_de_archivo, 'public');
        }

        DetalleSeccionInicio::where('id', '=' , $id)->update($seccionInicioData);
        $seccionInicio = DetalleSeccionInicio::findOrFail($id);

        return redirect()->route('seccion-inicio.show', $getSeccion_id)->with('success', 'Seccion de inicio actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Getting the $id from the section where I am
        $getSeccion_id = Session::get('seccion_id');

        $seccionInicio = DetalleSeccionInicio::findOrFail($id);

        if(Storage::delete('public/'.$seccionInicio->imagen)){
            DetalleSeccionInicio::destroy($id);
        }

        return redirect()->route('seccion-inicio.show', $getSeccion_id)->with('success', 'Seccion de inicio eliminada correctamente');
    }
}
