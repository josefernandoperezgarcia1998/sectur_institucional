<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(5);
        return view('category.category-index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.category-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_data = $request->all();

        // Validating the date_end_service, needs to be equals or after of the date start service
        // $validated = $request->validate([
        //     'name' => 'string|required',
        //     'description' => 'string',
        //     'imagen' => 'image|mimes:jpg,png,jpeg',
        //     'title_subcategory' => 'string',
        //     'links_subcategory' => 'string',
        // ]);


        // if($request->hasFile('imagen')){
        //     $category_data['imagen']= $request->file('imagen')->store('uploads/category','public');
        // }
        // dd($category_data);
        
        // $category_register = new Category();
        // $category_register->fill($category_data);
        // $category_register->save();
 
 
 
 
 
        // $imagen = $request->file('imagen');
        // if(!is_null($imagen)){
        //     $ruta_destino = public_path('fotos/category/');
        //     $nombre_de_archivo = $imagen->getClientOriginalName();
        //     $imagen->move($ruta_destino, $nombre_de_archivo);        
        //     $category_data['imagen']=$nombre_de_archivo;
        // }



        if($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombre_de_archivo = $imagen->getClientOriginalName();
            $category_data['imagen']= $request->file('imagen')->storeAs('uploads/categoria', $nombre_de_archivo, 'public');
        }








        Category::create($category_data);

        return redirect()->route('category.index')->with('success', 'Categoría creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('category.category-show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.category-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $category_data = request()->except('_token','_method');

        
        
        if($request->hasfile('imagen')){
            $imagen = $request->file('imagen');
            $nombre_de_archivo = $imagen->getClientOriginalName();
            $category = Category::findOrFail($id);
            Storage::delete('public/'.$category->imagen);
            $category_data['imagen']= $request->file('imagen')->storeAs('uploads/categoria', $nombre_de_archivo, 'public');
        }

        Category::where('id', '=' , $id)->update($category_data);
        $category = Category::findOrFail($id);

        return redirect()->route('category.index')->with('success', 'Categoría actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try{
            $category = Category::findOrFail($id);

            if(Storage::delete('public/'.$category->imagen)){
                Category::destroy($id);
            }

            return redirect()->route('category.index')->with('success', 'Categoría eliminada correctamente');
        } catch (\Illuminate\Database\QueryException $e){
            return redirect()->route('category.index')->with('error',$e->getMessage());
        }
    }
}
