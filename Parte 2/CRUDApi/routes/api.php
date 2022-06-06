<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/alumnos', 'App\Http\Controllers\AlumnoController@index'); // Todos Los Alumnos
Route::get('/alumnos/buscar/{id}', 'App\Http\Controllers\AlumnoController@findById'); // Buscar ID
Route::post('/alumnos/crear', 'App\Http\Controllers\AlumnoController@store'); // Crear Un Alumno
Route::put('/alumnos/actualizar/{id}', 'App\Http\Controllers\AlumnoController@update'); // Actualizar Un Alumno
Route::delete('/alumnos/eliminar/{id}', 'App\Http\Controllers\AlumnoController@destroy'); // Eliminar Un Alumno

