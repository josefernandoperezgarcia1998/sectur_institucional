<?php

namespace App\Http\Controllers;

use Session;
use App\Models\SubTema;
use Illuminate\Http\Request;
use App\Models\SubTemaElement;
use App\Http\Requests\StoreSubTemaElementRequest;
use App\Http\Requests\UpdateSubTemaElementRequest;

class SubTemaElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!empty(Session::get('subtema_id')))
        {
            // $subtemas = SubTemaElement::where('subtema_id', '=', Session::get('subtema_id'))->get();
            $subtemaElementos = SubTemaElement::whereSubtema_id(Session::get('subtema_id'))->get();
            return view('subtema-element.subtema-element-index', compact('subtemaElementos'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subtema-element.subtema-element-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubTemaElementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subElement_data = $request->all();

        // Size of the document
        $getDocumentSize = $request->file('document')->getSize();
        $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        $power = $getDocumentSize > 0 ? floor(log($getDocumentSize, 1024)) : 0;
        $valueFinal = number_format($getDocumentSize / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];

        // Type of document (extension)
        $getDocument = $request->file('document');
        $extension = $getDocument->getClientOriginalExtension();

        // Final size and type of document
        $subElement_data['size'] = $valueFinal;
        $subElement_data['type'] = $extension;

        // Assignment the id value of the subtema with the select subteme
        $subElement_data['subtema_id'] = Session::get('subtema_id');


        // dd($subElement_data);

        SubTemaElement::create($subElement_data);
        
        return redirect()->route('subTemaElements.index')->with('success', 'Servicio creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubTemaElement  $subTemaElement
     * @return \Illuminate\Http\Response
     */
    public function show(SubTemaElement $subTemaElement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubTemaElement  $subTemaElement
     * @return \Illuminate\Http\Response
     */
    public function edit(SubTemaElement $subTemaElement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubTemaElementRequest  $request
     * @param  \App\Models\SubTemaElement  $subTemaElement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubTemaElementRequest $request, SubTemaElement $subTemaElement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubTemaElement  $subTemaElement
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubTemaElement $subTemaElement)
    {
        //
    }
}
