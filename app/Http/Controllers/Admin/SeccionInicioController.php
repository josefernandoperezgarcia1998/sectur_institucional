<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Models\DetalleSeccionInicio;
use App\Http\Controllers\Controller;
use App\Models\SeccionInicio;
use Illuminate\Http\Request;
use App\Models\Pagina;
use App\Models\Seccion;

class SeccionInicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seccionesInicio = SeccionInicio::paginate(5);

        return view('admin.paginas.seccion-inicio.index', compact('seccionesInicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paginas.seccion-inicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seccionInicioData = $request->all();
        
        // Validating the date_end_service, needs to be equals or after of the date start service
        $validated = $request->validate([
            'titulo' => 'string|required',
        ]);

        SeccionInicio::create($seccionInicioData);
        
        return redirect()->route('seccion-inicio.index')->with('success', 'Sección creada correctamente');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seccion = SeccionInicio::findOrFail($id);
        
        $elementosSeccion = DetalleSeccionInicio::where('seccion_id', '=', $id)->get();
        
        $putSeccion_id = Session::put('seccion_id', $id);
        
        return view('admin.paginas.seccion-inicio.show', compact('seccion','elementosSeccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seccion = SeccionInicio::findOrFail($id);

        return view('admin.paginas.seccion-inicio.editar', compact('seccion'));
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
        $seccionInicioData = request()->except('_token','_method');
        // $seccionInicioData = $request->all();
        
        // Validating the date_end_service, needs to be equals or after of the date start service
        $validated = $request->validate([
            'titulo' => 'string',
            'slug' => 'string',
        ]);

        SeccionInicio::where('id', '=' , $id)->update($seccionInicioData);
        // $seccioninicio->update($seccionInicioData);
        // $category = SeccionInicio::findOrFail($seccionInicioData);

        return redirect()->route('seccion-inicio.show', $id)->with('success', 'Sección actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $seccion = SeccionInicio::findOrFail($id);

            if(Storage::delete('public/'.$seccion->imagen)){
                SeccionInicio::destroy($id);
            }

            SeccionInicio::destroy($id);

            return redirect()->route('seccion-inicio.index')->with('success', 'Seccion eliminada correctamente');
        } catch (\Illuminate\Database\QueryException $e){
            return redirect()->route('seccion-inicio.index')->with('error',$e->getMessage());
        }
    }
}
