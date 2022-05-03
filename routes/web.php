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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\Admin\InicioFrontController::class, 'index'])->name('inicio');

Route::resource('paginas', App\Http\Controllers\Admin\PaginasController::class)->names('paginas');
Route::resource('detalle-seccion-inicio', App\Http\Controllers\Admin\DetalleSeccionInicioController::class)->names('detalle-seccion-inicio');

/* Rutas de CRUD para las secciones de inicio */
Route::get('/pagina-detalle', [App\Http\Controllers\Admin\PaginasController::class, 'paginaInicioDetalle'])->name('inicio-detalle');
Route::get('/crear-seccion-inicio',[App\Http\Controllers\Admin\PaginasController::class, 'inicioDetalleCrearSeccion'])->name('crear-seccion-inicio');
Route::post('/created-seccion-inicio',[App\Http\Controllers\Admin\PaginasController::class, 'inicioDetalleStoreSeccion'])->name('created-seccion-inicio');
Route::get('/mostrar-seccion/{id}',[App\Http\Controllers\Admin\PaginasController::class, 'inicioDetalleShowSeccion'])->name('mostrar-seccion-inicio');
Route::get('/editar-seccion/{id}',[App\Http\Controllers\Admin\PaginasController::class, 'inicioDetalleEditarSeccion'])->name('editar-seccion-inicio');
Route::put('/actualizar-seccion/{id}',[App\Http\Controllers\Admin\PaginasController::class, 'inicioDetalleUpdateSeccion'])->name('actualizar-seccion-inicio');
Route::delete('/eliminar-seccion/{id}',[App\Http\Controllers\Admin\PaginasController::class, 'inicioDetalleDestroySeccion'])->name('eliminar-seccion-inicio');


/* ------------------------------------------ */
/* ------------------------------------------ */
/* ------------------------------------------ */
/* ------------------------------------------ */
/* ------------------------------------------ */

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/sidebar_test', [App\Http\Controllers\DashboardController::class, 'sidebar_test'])->name('sidebar_test');

Route::resource('category', App\Http\Controllers\CategoryController::class)->names('category');
Route::resource('subcategory', App\Http\Controllers\SubCategoryController::class)->names('subcategory');
Route::resource('subtema', App\Http\Controllers\SubTemaController::class)->names('subtema');
Route::resource('subTemaElements', App\Http\Controllers\SubTemaElementController::class)->names('subTemaElements');

// Ruta para crear un nuevo elemento de un subtema
Route::get('/create/element/{id}',[App\Http\Controllers\SubTemaController::class, 'addElement'])->name('crear_element');

