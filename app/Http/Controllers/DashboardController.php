<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubTema;

class DashboardController extends Controller
{
    public function index()
    {
        $category_count = Category::all()->count();
        $subcategory_count = SubCategory::all()->count();
        $subtema_count = SubTema::all()->count();
        
        return view('dashboard', compact('category_count','subcategory_count','subtema_count'));
    }

    public function sidebar_test()
    {
    
        $subcategory_with_relationships= SubTema::with('subcategory')->get();
        
        // dd($subcategory_with_relationships);


        
        // $categoria = Category::where(iselect('id')->get();
        // $subcatecoria = SubCategory::where('id', $id)->select('id')->get();
//


        $subtemas_marco_juridico = SubTema::where('subcategory_id', '=', 1)->get();
        $subtemas_servicios = SubTema::where('subcategory_id', '=', 2)->get();
        $subtemas_transparencia = SubTema::where('subcategory_id', '=', 3)->get();
        $subtemas_datos_personales = SubTema::where('subcategory_id', '=', 4)->get();
        // dd($subtemas);

        // dd($subcategoria_con_categoria);


        
        return view('plantilla.sidebar_test', 
                compact('subtemas_marco_juridico', 
                        'subtemas_servicios',
                        'subtemas_transparencia',
                        'subtemas_datos_personales'
                    ));
    }
}
