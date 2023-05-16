<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//rutas del controlador home

Route::get('/', [HomeController::class, 'index'])->name('principal');
Route::get('/clientes', [HomeController::class, 'clientes'])->name('clientes');
Route::get('/quienes_somos', [HomeController::class, 'quienes_somos'])->name('quienes_somos');
Route::get('/productos_publico', [HomeController::class, 'productos'])->name('productos');
Route::get('/noticias_publico', [HomeController::class, 'noticias'])->name('noticias');
Route::get('/servicios_publico', [HomeController::class, 'servicios'])->name('servicios');
Route::get('/contactanos', [HomeController::class, 'contactanos'])->name('contactanos');
Route::get('/certificaciones', [HomeController::class, 'certificaciones'])->name('certificaciones');
Route::get('/administracion', [HomeController::class, 'administracion'])->name('administracion');

//rutas del controlador de usuarios
Route::get('/home', [UsuarioController::class, 'login'])->name('home');
Route::post('/usuario_sesion', [UsuarioController::class, 'login'])->name('usuario_sesion');
Route::get('/inicia_sesion', [UsuarioController::class, 'index'])->name('login'); 
Route::get('/panel_admin', [UsuarioController::class, 'panelAdmin'])->name('panel_admin');

//rutas del controlador noticias
Route::get('/noticias_listar', [NoticiasController::class, 'getNews'])->name('news.get');
Route::get('/noticias_estatus/{id}', [NoticiasController::class, 'changeStatus'])->name('status');
Route::resource('/noticias', NoticiasController::class);

//rutas del controlador de productos
Route::get('/productos_stock', [ProductosController::class, 'productsGraph'])->name('products_graph.get');
Route::post('/productos_editar', [ProductosController::class, 'update'])->name('productos.update');
Route::get('/producto_pdf/{id}', [ProductosController::class, 'pdf'])->name('producto_pdf.get');
Route::get('/productos_reporte', [ProductosController::class, 'report'])->name('productos_reporte.get');
Route::resource('/productos', ProductosController::class)->except('update');
Route::get('/productos_listar', [ProductosController::class, 'getProducts'])->name('products.get');

//rutas del controlador field
Route::get('/areas_listar', [FieldController::class, 'getFields'])->name('fields.get');
Route::resource('/areas', FieldController::class);

Route::get('/sugerencias_listar', [SuggestionController::class, 'getSuggestions'])->name('suggestions.get');
Route::get('/pdf', [SuggestionController::class, 'pdf'])->name('pdf');
Route::get('/excel', [SuggestionController::class, 'excel'])->name('excel');
Route::resource('/sugerencias', SuggestionController::class);

//rutas del controlador de Servicios
Route::get('/servicios_por_area', [ServiciosController::class, 'servicesByFieldGraph'])->name('services_graph.get');
Route::get('/servicios_listar', [ServiciosController::class, 'getServices'])->name('services.get');
Route::resource('/servicios', ServiciosController::class);

//ruta del controlador de graficas
Route::get('/graficas', [GraphController::class, 'index'])->name('graphs');


Route::get('/solicitudes_servicios_listar', [ServiceRequestController::class, 'getServicesRequests'])->name('services_requests.get');
Route::resource('/solicitudes_servicios', ServiceRequestController::class);

//ruta del controlador contacto
Route::resource('/contacto', ContactoController::class);