<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Models\SubTema;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubTemaRequest;
use App\Http\Requests\UpdateSubTemaRequest;

class SubTemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtemas = SubTema::paginate(5);

        return view('subtema.subtema-index', compact('subtemas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = DB::table('sub_categories')->orderBy('category_id','asc')->get();

        return view('subtema.subtema-create', compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubTemaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subtema_data = $request->all();

        // Validating 
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'string',
        ]);

        SubTema::create($subtema_data);

        return redirect()->route('subtema.index')->with('success', 'Subtema creado correctamente');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubTema  $subTema
     * @return \Illuminate\Http\Response
     */
    public function show(/* SubTema $subTema */ $id)
    {
        $subtema = SubTema::findOrFail($id);

        return view('subtema.subtema-show', compact('subtema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubTema  $subTema
     * @return \Illuminate\Http\Response
     */
    public function edit(/* SubTema $subTema */ $id)
    {
        $subtema = SubTema::findOrFail($id);
        $subcategories = DB::table('sub_categories')->orderBy('name','asc')->get();

        return view('subtema.subtema-edit', compact('subtema', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubTemaRequest  $request
     * @param  \App\Models\SubTema  $subTema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubTema $subtema)
    {
        $subtema_data = $request->all();

        // Validating 
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'string',
        ]);

        $subtema->update($subtema_data);

        return redirect()->route('subtema.index')->with('success', 'Subtema actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubTema  $subTema
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubTema $subTema)
    {
        try{
            $subtema = SubTema::findOrFail($subTema->id);

            return redirect()->route('subcategory.index')->with('success', 'Subtema eliminada correctamente');
        } catch (\Illuminate\Database\QueryException $e){
            return redirect()->route('subcategory.index')->with('error',$e->getMessage());
        }
    }

    public function addElement($id)
    {
        $x = Session::put('subtema_id', $id);
        // $y = Session::get('subtema_id');
        // dd($y);
        return redirect('/subTemaElements');
    }

}
