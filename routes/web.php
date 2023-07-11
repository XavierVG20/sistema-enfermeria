<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('estudiantes', App\Http\Controllers\EstudianteController::class);


Route::resource('insumosmedicos', App\Http\Controllers\InsumosMedicoController::class);

 
Route::resource('informe-pasientes', App\Http\Controllers\InformePasienteController::class);

Route::get('/reporte',  [App\Http\Controllers\InformePasienteController::class, 'reporte_informes'])->name('reporte.pasientes');
Route::get('/reporte-estudiantes',  [App\Http\Controllers\EstudianteController::class, 'reporte_estudiantes'])->name('reporte.estudiantes');
Route::get('/reporte-insumos',  [App\Http\Controllers\InsumosMedicoController::class, 'reporte_insumos'])->name('reporte.insumos');

Route::get('/users', [ App\Http\Controllers\UsersController::class, 'index'])->name('users.index');


