<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Models\DetalleSeccionInicio;
use App\Http\Controllers\Controller;
use App\Models\SeccionInicio;
use Illuminate\Http\Request;
use App\Models\Pagina;
use App\Models\Seccion;
use Session;

class PaginasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginas = Pagina::paginate(5);
        return view('admin.paginas.index', compact('paginas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paginas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pagina_data = $request->all();

        if($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombre_de_archivo = $imagen->getClientOriginalName();
            $category_data['imagen']= $request->file('imagen')->storeAs('uploads/paginas', $nombre_de_archivo, 'public');
        }

        Pagina::create($pagina_data);
        
        return redirect()->route('paginas.index')->with('success', 'Página creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagina_data = Pagina::findOrFail($id);

        $elementosSeccion = Seccion::where('pagina_id', '=', $id)->get();
        
        return view('admin.paginas.show', compact('pagina_data', 'elementosSeccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
            $pagina = Pagina::findOrFail($id);

            if(Storage::delete('public/'.$pagina->imagen)){
                Pagina::destroy($id);
            }

            return redirect()->route('inicio-detalle')->with('success', 'Pagina eliminada correctamente');
        } catch (\Illuminate\Database\QueryException $e){
            return redirect()->route('inicio-detalle')->with('error',$e->getMessage());
        }
    }

    // public function paginaInicioDetalle()
    // {
    //     $seccionesInicio = SeccionInicio::paginate(5);

    //     return view('admin.paginas.seccion-inicio.index', compact('seccionesInicio'));
    // }

    // public function inicioDetalleCrearSeccion()
    // {
    //     return view('admin.paginas.seccion-inicio.create');
    // }

    // public function inicioDetalleStoreSeccion(Request $request)
    // {
    //     $seccionInicioData = $request->all();
        
    //     // Validating the date_end_service, needs to be equals or after of the date start service
    //     $validated = $request->validate([
    //         'titulo' => 'string|required',
    //     ]);

    //     SeccionInicio::create($seccionInicioData);
        
    //     return redirect()->route('inicio-detalle')->with('success', 'Página creada correctamente');
    
    // }

    // public function inicioDetalleShowSeccion($id)
    // {

    //     $seccion = SeccionInicio::findOrFail($id);
    //     $elementosSeccion = DetalleSeccionInicio::where('seccion_id', '=', $id)->get();
        
        
    //     $putSeccion_id = Session::put('seccion_id', $id);
        
    //     return view('admin.paginas.seccion-inicio.show', compact('seccion','elementosSeccion'));
    // }

    // public function inicioDetalleEditarSeccion($id)
    // {
    //     $seccion = SeccionInicio::findOrFail($id);

    //     return view('admin.paginas.seccion-inicio.editar', compact('seccion'));
    // }

    // public function inicioDetalleUpdateSeccion(Request $request, $id)
    // {
    //     $seccionInicioData = request()->except('_token','_method');
    //     // $seccionInicioData = $request->all();
        
    //     // Validating the date_end_service, needs to be equals or after of the date start service
    //     $validated = $request->validate([
    //         'titulo' => 'string',
    //         'slug' => 'string',
    //     ]);

    //     SeccionInicio::where('id', '=' , $id)->update($seccionInicioData);
    //     // $seccioninicio->update($seccionInicioData);
    //     // $category = SeccionInicio::findOrFail($seccionInicioData);

    //     return redirect()->route('mostrar-seccion-inicio', $id)->with('success', 'Sección actualizada correctamente');
    // }

    // public function inicioDetalleDestroySeccion($id)
    // {

    //     try{
    //         $seccion = SeccionInicio::findOrFail($id);

    //         if(Storage::delete('public/'.$seccion->imagen)){
    //             SeccionInicio::destroy($id);
    //         }

    //         SeccionInicio::destroy($id);

    //         return redirect()->route('inicio-detalle')->with('success', 'Seccion eliminada correctamente');
    //     } catch (\Illuminate\Database\QueryException $e){
    //         return redirect()->route('inicio-detalle')->with('error',$e->getMessage());
    //     }
    // }

}
