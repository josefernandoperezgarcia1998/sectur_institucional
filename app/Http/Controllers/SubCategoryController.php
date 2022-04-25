<?php

namespace App\Http\Controllers;

use DB;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = SubCategory::paginate(5);

        return view('subcategory.subcategory-index', compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->orderBy('name','asc')->get();

        return view('subcategory.subcategory-create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory_data = $request->all();

        // Validating the date_end_service, needs to be equals or after of the date start service
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'string',
        ]);

        $imagen = $request->file('imagen');
        $nombre_de_archivo = $imagen->getClientOriginalName();

        if($request->hasFile('imagen')){
            $subcategory_data['imagen']= $request->file('imagen')->storeAs('uploads/subcategoria', $nombre_de_archivo, 'public');
        }

        SubCategory::create($subcategory_data);

        return redirect()->route('subcategory.index')->with('success', 'Subcategoría creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        return view('subcategory.subcategory-show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(/* SubCategory $subCategory */ $id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $categories = DB::table('categories')->orderBy('name','asc')->get();
        return view('subcategory.subcategory-edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubCategoryRequest  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $subcategory_data = request()->except('_token','_method');


        
        if($request->hasfile('imagen')){
            $imagen = $request->file('imagen');
            $nombre_de_archivo = $imagen->getClientOriginalName();
            $category = SubCategory::findOrFail($id);
            Storage::delete('public/'.$category->imagen);
            $subcategory_data['imagen']= $request->file('imagen')->storeAs('uploads/subcategoria', $nombre_de_archivo, 'public');
        }

        SubCategory::where('id', '=' , $id)->update($subcategory_data);
        $subcategory = SubCategory::findOrFail($id);

        return redirect()->route('subcategory.index')->with('success', 'Subcategoría actualizada correctamente');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $subcategory = SubCategory::findOrFail($id);

            if(Storage::delete('public/'.$subcategory->imagen)){
                SubCategory::destroy($id);
            }

            return redirect()->route('subcategory.index')->with('success', 'Subcategoría eliminada correctamente');
        } catch (\Illuminate\Database\QueryException $e){
            return redirect()->route('subcategory.index')->with('error',$e->getMessage());
        }
    }
}
