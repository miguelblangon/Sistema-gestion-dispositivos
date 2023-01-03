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

Route::get('/', function () {return view('welcome');});
Route::get('/dashboard', function () {return view('dashboard')->with([
            'usuarios'=>\App\Models\Usuario::latest()->take(5)->get(),
            'equipos'=>\App\Models\Equipo::latest()->take(5)->get()
        ]);})->middleware(['auth'])->name('dashboard');

Route::resource('usuarios', \App\Http\Controllers\UsuarioController::class)->middleware(['auth']);
Route::resource('equipos', \App\Http\Controllers\EquipoController::class)->middleware(['auth']);

Route::get('equipos/ver-equipo/{id}', [\App\Http\Controllers\EquipoController::class, 'verEquipo'])->name('ver-equipo');
Route::get('equipos/descargarQr/{id}', [\App\Http\Controllers\EquipoController::class, 'descargarQr'])->name('descargar-qr');



require __DIR__.'/auth.php';
