<?php

use Illuminate\Support\Facades\Route;
use App\Models\DetalleSeccionInicio;

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

/* Ruta resource para la sección de páginas (Inicio, conócenos, etc) */
Route::resource('paginas', App\Http\Controllers\Admin\PaginasController::class)->names('paginas');

/* Ruta exclusiva para la sección de inicio ( lo primero que se ve en la plataforma al entrar ) */
/* Rutas de CRUD para las secciones de inicio */
Route::resource('seccion-inicio', App\Http\Controllers\Admin\SeccionInicioController::class)->names('seccion-inicio');

/* Ruta exclusiva para la sección de inicio ( lo primero que se ve en la plataforma al entrar ) */
Route::resource('detalle-seccion-inicio', App\Http\Controllers\Admin\DetalleSeccionInicioController::class)->names('detalle-seccion-inicio');

/* Ruta para la secciones */
Route::resource('secciones', App\Http\Controllers\Admin\SeccionController::class)->names('secciones');

/* Ruta para los elementos */
Route::resource('elementos', App\Http\Controllers\Admin\ElementoController::class)->names('elementos');

/* Ruta para conócenos */
Route::get('/conocenos', [App\Http\Controllers\Admin\Front\ConocenosController::class, 'index'])->name('conocenos.index');

Route::prefix('conocenos')->group(function () {
    Route::get('/mision-vision', [App\Http\Controllers\Admin\Front\ConocenosController::class, 'vistaMisionVision'])->name('conocenos.mision-vision');
    Route::get('/organigrama', [App\Http\Controllers\Admin\Front\ConocenosController::class, 'vistaOrganigrama'])->name('conocenos.organigrama');
});





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

