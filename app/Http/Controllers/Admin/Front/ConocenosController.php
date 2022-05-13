<?php

namespace App\Http\Controllers\Admin\Front;

use App\Http\Controllers\Controller;
use App\Models\Elemento;
use App\Models\Seccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConocenosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bienvenida = Elemento::with('seccion')
        //                 ->where('titulo','=','Bienvenida')
        //                 ->select('titulo','descripcion', 'updated_at')
        //                 ->get();
        // dd($bienvenidaTitulo);

        
        // $elemento = DB::table('elementos')
        //                 ->join('seccions', 'seccions.id', '=', 'elementos.seccion_id')
        //                 ->where('seccions.slug','=','conocenos')
        //                 ->select('elementos.*')
        //                 ->get();

        // $elemento = Elemento::with('seccion')->get();
        // $elemento = Seccion::with('elementos')->get();

        // $secciones = Seccion::all();
        // $secciones = $secciones->load('elementos');

        // Este si funciona como quiero
        // $seccion1 = Seccion::with('elementos')
        //             ->where('slug','=','secretaria-de-turismo')
        //             ->get();

        // Este si funciona como quiero
        // $bienvenida = Seccion::with(['elementos' => function ($query) {
        //             $query->where('titulo', '=', 'Bienvenida');
        //             }])
        //             ->where('slug','=','secretaria-de-turismo')
        //             ->get();

        $seccion_id_collection = Seccion::where('slug', 'secretaria-de-turismo')->select('id')->get();

        $aux_id = 0;
        foreach($seccion_id_collection as $seccionId)
        {
            $aux_id=$seccionId->id;
        }
        

        $bienvenida = Elemento::with(['seccion' => function ($query) {
                    $query->where('slug', 'secretaria-de-turismo');
                    }])
                    ->where('titulo', '=', 'Bienvenida')
                    ->where('seccion_id','=',$aux_id)
                    ->get();
                    

        // dd($bienvenida);
        return view('front.conocenos.conocenos', compact('bienvenida'));
    }

    public function vistaMisionVision()
    {
        $mision_vision = Elemento::with('seccion')
                        ->where('titulo','=','Misión y Visión')
                        ->select('titulo','descripcion', 'updated_at')
                        ->get();
        // dd($bienvenidaTitulo);
        return view('front.conocenos.mision-vision', compact('mision_vision'));
    }
    public function vistaOrganigrama()
    {
        $organigrama = Elemento::with('seccion')
                        ->where('titulo','=','Organigrama')
                        ->select('titulo','descripcion', 'imagen', 'documento', 'size_document', 'type_document', 'updated_at')
                        ->get();
        // dd($bienvenidaTitulo);
        return view('front.conocenos.organigrama', compact('organigrama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
