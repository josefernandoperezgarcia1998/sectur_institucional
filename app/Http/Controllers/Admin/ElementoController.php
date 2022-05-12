<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Elemento;

class ElementoController extends Controller
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
        $secciones = DB::table('seccions')->orderBy('titulo','asc')->get();
        return view('admin.elemento.create', compact('secciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $idSeccion = Session::get('seccion_id');

        $elemento_data = $request->all();

        $validated = $request->validate([
            'titulo' => 'string|required',
            'imagen' => 'mimes:jpg,jpeg,png',
            'documento' => 'mimes:doc,pdf,docx',
            'seccion_id' => 'required',
        ]);

        if($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombre_de_imagen = $imagen->getClientOriginalName();
        
            // Size of the imagen
            $getImagenSize = $request->file('imagen')->getSize();
            $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
            $power = $getImagenSize > 0 ? floor(log($getImagenSize, 1024)) : 0;
            $imagenvalueFinal = number_format($getImagenSize / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
            
            // Type of document (extension)
            $getImagen = $request->file('imagen');
            $imagenExtension = $getImagen->getClientOriginalExtension();
            
            // Final size and type of document
            $elemento_data['size_image'] = $imagenvalueFinal;
            $elemento_data['type_image'] = $imagenExtension;

            $elemento_data['imagen']= $request->file('imagen')->storeAs('uploads/elementos/imagenes', $nombre_de_imagen, 'public');
        }

        if($request->hasFile('documento')){
            $documento = $request->file('documento');
            $nombre_de_documento = $documento->getClientOriginalName();
        
            // Size of the imagen
            $getDocumentSize = $request->file('documento')->getSize();
            $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
            $power = $getDocumentSize > 0 ? floor(log($getDocumentSize, 1024)) : 0;
            $documentvalueFinal = number_format($getDocumentSize / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
            
            // Type of document (extension)
            $getDocument = $request->file('documento');
            $documentExtension = $getDocument->getClientOriginalExtension();
            
            // Final size and type of document
            $elemento_data['size_document'] = $documentvalueFinal;
            $elemento_data['type_document'] = $documentExtension;

            $elemento_data['documento']= $request->file('documento')->storeAs('uploads/elementos/documentos', $nombre_de_documento, 'public');
        }
        
        
        Elemento::create($elemento_data);
        
        return redirect()->route('secciones.show', $idSeccion)->with('success', 'Elemento creado correctamente');
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
        $elemento = Elemento::findOrFail($id);

        $secciones = DB::table('seccions')->orderBy('titulo','asc')->get();

        return view('admin.elemento.edit', compact('elemento', 'secciones'));
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
        $idSeccion = Session::get('seccion_id');

        $elemento_data = request()->except('_token','_method');

        $validated = $request->validate([
            'titulo' => 'string|required',
            'imagen' => 'mimes:jpg,jpeg,png',
            'documento' => 'mimes:doc,pdf,docx',
            'seccion_id' => 'required',
        ]);

        if($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombre_de_imagen = $imagen->getClientOriginalName();
        
            // Size of the imagen
            $getImagenSize = $request->file('imagen')->getSize();
            $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
            $power = $getImagenSize > 0 ? floor(log($getImagenSize, 1024)) : 0;
            $imagenvalueFinal = number_format($getImagenSize / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
            
            // Type of document (extension)
            $getImagen = $request->file('imagen');
            $imagenExtension = $getImagen->getClientOriginalExtension();
            
            // Final size and type of document
            $elemento_data['size_image'] = $imagenvalueFinal;
            $elemento_data['type_image'] = $imagenExtension;

            $elemento_imagen = Elemento::findOrFail($id);
            Storage::delete('public/'.$elemento_imagen->imagen);

            $elemento_data['imagen'] = $request->file('imagen')->storeAs('uploads/elementos/imagenes', $nombre_de_imagen, 'public');
        }

        if($request->hasFile('documento')){
            $documento = $request->file('documento');
            $nombre_de_documento = $documento->getClientOriginalName();
        
            // Size of the imagen
            $getDocumentSize = $request->file('documento')->getSize();
            $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
            $power = $getDocumentSize > 0 ? floor(log($getDocumentSize, 1024)) : 0;
            $documentvalueFinal = number_format($getDocumentSize / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
            
            // Type of document (extension)
            $getDocument = $request->file('documento');
            $documentExtension = $getDocument->getClientOriginalExtension();
            
            // Final size and type of document
            $elemento_data['size_document'] = $documentvalueFinal;
            $elemento_data['type_document'] = $documentExtension;

            $elemento_documento = Elemento::findOrFail($id);
            Storage::delete('public/'.$elemento_documento->documento);

            $elemento_data['documento']= $request->file('documento')->storeAs('uploads/elementos/documentos', $nombre_de_documento, 'public');
        }

        Elemento::where('id', '=' , $id)->update($elemento_data);

        return redirect()->route('elementos.edit', $id)->with('success', 'Elemento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idSeccion = Session::get('seccion_id');

        $elemento = Elemento::findOrFail($id);

        if(Storage::delete('public/'.$elemento->imagen)){
            Elemento::destroy($id);
        }

        if(Storage::delete('public/'.$elemento->documento)){
            Elemento::destroy($id);
        }


        return redirect()->route('secciones.show', $idSeccion)->with('success', 'Elemento eliminado correctamente');
    
    }
}
