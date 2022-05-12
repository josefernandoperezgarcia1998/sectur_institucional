<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Elemento;
use App\Models\Seccion;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secciones = Seccion::paginate(5);
        
        return view('admin.secciones.index', compact('secciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paginas = DB::table('paginas')->orderBy('titulo','asc')->get();
        return view('admin.secciones.create', compact('paginas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seccion_data = $request->all();

        $validated = $request->validate([
            'titulo' => 'string|required',
            'pagina_id' => 'required',
        ]);

        Seccion::create($seccion_data);
        
        return redirect()->route('secciones.index')->with('success', 'Seccion creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $idSeccion = Session::put('seccion_id', $id);

        $seccion_seleccionada = Seccion::findOrFail($id);

        $elementosSeccion = Elemento::where('seccion_id', '=', $id)->get();
        
        return view('admin.secciones.show', compact('seccion_seleccionada', 'elementosSeccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seccion_seleccionada = Seccion::findOrFail($id);

        $paginas = DB::table('paginas')->get();

        $elementosSeccion = Elemento::where('seccion_id', '=', $id)->get();
        
        return view('admin.secciones.edit', compact('seccion_seleccionada', 'elementosSeccion', 'paginas'));
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
        $seccion_data = request()->except('_token','_method');

        $validated = $request->validate([
            'titulo' => 'string',
            'slug' => 'string',
        ]);

        Seccion::where('id', '=' , $id)->update($seccion_data);

        return redirect()->route('secciones.show', $id)->with('success', 'Sección actualizada correctamente');
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

            Seccion::destroy($id);
            
            return redirect()->route('secciones.index')->with('success', 'Sección eliminada correctamente');

        } catch (\Illuminate\Database\QueryException $e){
            return redirect()->route('secciones.index')->with('error',$e->getMessage());
        }
    }
}
