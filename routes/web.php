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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas para el administrador//
Route::get('/administradores', [App\Http\Controllers\AdministradorController::class, 'index'])->name('administradores.index');
Route::get('/administradores/create', [App\Http\Controllers\AdministradorController::class, 'create'])->name('administradores.create');
Route::post('/administradores', [App\Http\Controllers\AdministradorController::class, 'store'])->name('administradores.store');
Route::get('/administradores/{administrador}', [App\Http\Controllers\AdministradorController::class, 'show'])->name('administradores.show');
Route::get('/administradores/{administrador}/edit', [App\Http\Controllers\AdministradorController::class, 'edit'])->name('administradores.edit');
Route::put('/administradores/{administrador}', [App\Http\Controllers\AdministradorController::class, 'update'])->name('administradores.update');
Route::delete('/administradores/{administrador}', [App\Http\Controllers\AdministradorController::class, 'destroy'])->name('administradores.delete');

//Rutas para el instructor//
Route::get('/instructores', [App\Http\Controllers\InstructorController::class, 'index'])->name('instructores.index');
Route::get('/instructores/create', [App\Http\Controllers\InstructorController::class, 'create'])->name('instructores.create');
Route::post('/instructores', [App\Http\Controllers\InstructorController::class, 'store'])->name('instructores.store');
Route::get('/instructores/{instructor}', [App\Http\Controllers\InstructorController::class, 'show'])->name('instructores.show');
Route::get('/instructores/{instructor}/edit', [App\Http\Controllers\InstructorController::class, 'edit'])->name('instructores.edit');
Route::put('/instructores/{instructor}', [App\Http\Controllers\InstructorController::class, 'update'])->name('instructores.update');
Route::delete('/instructores/{instructor}', [App\Http\Controllers\InstructorController::class, 'destroy'])->name('instructores.delete');

//Rutas para el cliente//
Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [App\Http\Controllers\ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [App\Http\Controllers\ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{cliente}', [App\Http\Controllers\ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/{cliente}/edit', [App\Http\Controllers\ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [App\Http\Controllers\ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('clientes.delete');

//Rutas para descuento//
Route::get('/descuentos/create', [App\Http\Controllers\DescuentoController::class, 'create'])->name('descuentos.create');
Route::get('/descuentos', [App\Http\Controllers\DescuentoController::class, 'index'])->name('descuentos.index');
Route::post('/descuentos', [App\Http\Controllers\DescuentoController::class, 'store'])->name('descuentos.store');
Route::delete(' /descuentos/{descuento}', [App\Http\Controllers\DescuentoController::class, 'destroy'])->name('descuentos.delete');

//Rutas para categorias//
Route::get('/categorias/create', [App\Http\Controllers\CategoriaController::class, 'create'])->name('categorias.create');
Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categorias.index');
Route::post('/categorias', [App\Http\Controllers\CategoriaController::class, 'store'])->name('categorias.store');
Route::delete('/categorias/{categoria}', [App\Http\Controllers\CategoriaController::class, 'destroy'])->name('categorias.delete');

//Rutas para disciplinas//
Route::get('/disciplinas/create', [App\Http\Controllers\DisciplinaController::class, 'create'])->name('disciplinas.create');
Route::get('/disciplinas', [App\Http\Controllers\DisciplinaController::class, 'index'])->name('disciplinas.index');
Route::post('/disciplinas', [App\Http\Controllers\DisciplinaController::class, 'store'])->name('disciplinas.store');
Route::delete('/disciplinas/{disciplina}', [App\Http\Controllers\DisciplinaController::class, 'destroy'])->name('disciplinas.delete');

//Rutas para grupos//
Route::get('/grupos/create', [App\Http\Controllers\GrupoController::class, 'create'])->name('grupos.create');
Route::get('/grupos', [App\Http\Controllers\GrupoController::class, 'index'])->name('grupos.index');
Route::post('/grupos', [App\Http\Controllers\GrupoController::class, 'store'])->name('grupos.store');
Route::delete('/grupos/{grupo}', [App\Http\Controllers\GrupoController::class, 'destroy'])->name('grupos.delete');
Route::get('/grupos/{grupo}', [App\Http\Controllers\GrupoController::class, 'show'])->name('grupos.show');


//Rutas para horarios//
Route::get('/horarios/create', [App\Http\Controllers\HorarioController::class, 'create'])->name('horarios.create');
Route::get('/horarios', [App\Http\Controllers\HorarioController::class, 'index'])->name('horarios.index');
Route::post('/horarios', [App\Http\Controllers\HorarioController::class, 'store'])->name('horarios.store');
Route::delete('/horarios/{horario}', [App\Http\Controllers\HorarioController::class, 'destroy'])->name('horarios.delete');
Route::get('/horarios/{horario}', [App\Http\Controllers\HorarioController::class, 'show'])->name('horarios.show');

//Rutas para casilleros//
Route::get('/casilleros/create', [App\Http\Controllers\CasillerController::class, 'create'])->name('casilleros.create');
Route::get('/casilleros', [App\Http\Controllers\CasillerController::class, 'index'])->name('casilleros.index');
Route::post('/casilleros', [App\Http\Controllers\CasillerController::class, 'store'])->name('casilleros.store');
Route::delete('/casilleros/{casillero}', [App\Http\Controllers\CasillerController::class, 'destroy'])->name('casilleros.delete');
Route::get('/casilleros/{casillero}', [App\Http\Controllers\CasillerController::class, 'show'])->name('casilleros.show');

//Rutas para salas//
Route::get('/salas/create', [App\Http\Controllers\SalaController::class, 'create'])->name('salas.create');
Route::get('/salas', [App\Http\Controllers\SalaController::class, 'index'])->name('salas.index');
Route::post('/salas', [App\Http\Controllers\SalaController::class, 'store'])->name('salas.store');
Route::delete('/salas/{sala}', [App\Http\Controllers\SalaController::class, 'destroy'])->name('salas.delete');
Route::get('/salas/{sala}', [App\Http\Controllers\SalaController::class, 'show'])->name('salas.show');


//Rutas para aparatos//
Route::get('/aparatos/create', [App\Http\Controllers\AparatoController::class, 'create'])->name('aparatos.create');
Route::get('/aparatos', [App\Http\Controllers\AparatoController::class, 'index'])->name('aparatos.index');
Route::post('/aparatos', [App\Http\Controllers\AparatoController::class, 'store'])->name('aparatos.store');
Route::delete('/aparatos/{aparato}', [App\Http\Controllers\AparatoController::class, 'destroy'])->name('aparatos.delete');
Route::get('/aparatos/{aparato}', [App\Http\Controllers\AparatoController::class, 'show'])->name('aparatos.show');


//Rutas para Alquiler//
Route::get('/alquileres/create', [App\Http\Controllers\AlquilerController::class, 'create'])->name('alquileres.create');
Route::get('/alquileres', [App\Http\Controllers\AlquilerController::class, 'index'])->name('alquileres.index');
Route::post('/alquileres', [App\Http\Controllers\AlquilerController::class, 'store'])->name('alquileres.store');
Route::delete('/alquileres/{alquiler}', [App\Http\Controllers\AlquilerController::class, 'destroy'])->name('alquileres.delete');
Route::get('/alquileres/{alquiler}', [App\Http\Controllers\AlquilerController::class, 'show'])->name('alquileres.show');
Route::get('/alquileres/{alquiler}/edit', [App\Http\Controllers\AlquilerController::class, 'edit'])->name('alquileres.edit');
Route::put('/alquileres/{alquiler}', [App\Http\Controllers\AlquilerController::class, 'update'])->name('alquileres.update');

//Rutas para Inscripcion//
Route::get('/inscripciones/create', [App\Http\Controllers\InscripcionController::class, 'create'])->name('inscripciones.create');
Route::get('/inscripciones', [App\Http\Controllers\InscripcionController::class, 'index'])->name('inscripciones.index');
Route::post('/inscripciones', [App\Http\Controllers\InscripcionController::class, 'store'])->name('inscripciones.store');
Route::delete('/inscripciones/{inscripcion}', [App\Http\Controllers\InscripcionController::class, 'destroy'])->name('inscripciones.delete');
Route::get('/inscripciones/{inscripcion}', [App\Http\Controllers\InscripcionController::class, 'show'])->name('inscripciones.show');
Route::get('/inscripciones/{inscripcion}/edit', [App\Http\Controllers\InscripcionController::class, 'edit'])->name('inscripciones.edit');
Route::put('/inscripciones/{inscripcion}', [App\Http\Controllers\InscripcionController::class, 'update'])->name('inscripciones.update');

//Rutas para user//
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
