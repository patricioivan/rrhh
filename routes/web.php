<?php

use App\Http\Livewire\Form;
use App\Http\Livewire\Empleado;
use App\Http\Livewire\FormEmpleados;
use App\Http\Livewire\EmpleadoPerfil;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EmpleadoPremios;
use App\Http\Livewire\EmpleadoCastigos;
use App\Http\Livewire\EmpleadoEvaluacion;
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


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/ficha-personal', function () {
    return view('ficha-personal');
})->name('ficha-personal');
Route::middleware(['auth:sanctum', 'verified'])->get('/empleado', Empleado::class)->name('empleado.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/form/{empleado?}', Form::class)->name('form-empleados');
Route::middleware(['auth:sanctum', 'verified'])->get('/empleado/{empleado}', EmpleadoPerfil::class)->name('empleado-perfil');
Route::middleware(['auth:sanctum', 'verified'])->get('/empleado/premios/{empleado}', EmpleadoPremios::class)->name('empleado-premios');
Route::middleware(['auth:sanctum', 'verified'])->get('/empleado/castigos/{empleado}', EmpleadoCastigos::class)->name('empleado-castigos');
Route::middleware(['auth:sanctum', 'verified'])->get('/empleado/desempeño/{empleado}', EmpleadoEvaluacion::class)->name('empleado-evaluacion');






//Route::middleware(['auth:sanctum', 'verified'])->get('/empleados/crear', Create::class)->name('empleado.create');

Route::middleware(['auth:sanctum', 'verified'])->get('/sobre-rrhh', function () {
    return view('sobre-rrhh');
})->name('sobre-rrhh');