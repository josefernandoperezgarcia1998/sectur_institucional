<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $category_count= Category::all()->count();
        
        return view('dashboard', compact('category_count'));
    }
}
