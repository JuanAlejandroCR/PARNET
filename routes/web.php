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
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('principal');
Route::get('/clientes', [HomeController::class, 'clientes'])->name('clientes');
Route::get('/quienes_somos', [HomeController::class, 'quienes_somos'])->name('quienes_somos');
Route::get('/productos_publico', [HomeController::class, 'productos'])->name('productos');
Route::get('/noticias_publico', [HomeController::class, 'noticias'])->name('noticias');
Route::get('/servicios_publico', [HomeController::class, 'servicios'])->name('servicios');
Route::get('/contactanos', [HomeController::class, 'contactanos'])->name('contactanos');
Route::get('/certificaciones', [HomeController::class, 'certificaciones'])->name('certificaciones');
Route::get('/administracion', [HomeController::class, 'administracion'])->name('administracion');
Route::post('/usuario_sesion', [UserController::class, 'login'])->name('usuario_sesion');
Route::get('/inicia_sesion', [UserController::class, 'index'])->name('login'); 
Route::get('/panel_admin', [UserController::class, 'panelAdmin'])->name('panel_admin');

Route::get('/', function () {
    return view('index');
});
