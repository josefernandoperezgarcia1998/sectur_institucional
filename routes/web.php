<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/sidebar_test', [App\Http\Controllers\DashboardController::class, 'sidebar_test'])->name('sidebar_test');

Route::resource('category', App\Http\Controllers\CategoryController::class)->names('category');
Route::resource('subcategory', App\Http\Controllers\SubCategoryController::class)->names('subcategory');
Route::resource('subtema', App\Http\Controllers\SubTemaController::class)->names('subtema');

