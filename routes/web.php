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

//Route::get('/', function () {return view('welcome');});
Route::get('/dashboard', function () {return view('dashboard')->with([
            'usuarios'=>\App\Models\Usuario::orderBy('id', 'DESC')->take(5)->get(),
            'equipos'=>\App\Models\Equipo::orderBy('id', 'DESC')->take(5)->get()
        ]);})->middleware(['auth'])->name('dashboard');
//Para juan son los clientes
Route::resource('usuarios', \App\Http\Controllers\UsuarioController::class)->middleware(['auth']);
//Estos son los equipos usados por los usuarios
Route::resource('equipos', \App\Http\Controllers\EquipoController::class)->middleware(['auth']);
Route::get('equipos/ver-equipo/{equipo}', [\App\Http\Controllers\EquipoController::class, 'verEquipo'])->name('ver-equipo');
Route::get('equipos/descargarQr/{id}', [\App\Http\Controllers\EquipoController::class, 'descargarQr'])->name('descargar-qr');

//historico de las incidencias
    //create custom tiene que ir antes que el otro por motivos de laravel para que no se haga un lio
Route::get('historico/crear-equipo/{equipo}', [\App\Http\Controllers\HistoricoController::class,'createDos'] )->middleware(['auth'])->name('historico.crear-equipo');
Route::resource('historico', \App\Http\Controllers\HistoricoController::class)->middleware(['auth']);




require __DIR__.'/auth.php';
