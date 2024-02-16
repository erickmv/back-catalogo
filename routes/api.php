<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Mostrar todas las personas
Route::get('/people', [PersonController::class, 'index']);

// Agregar una nueva persona
Route::post('/people', [PersonController::class, 'store']);

// Actualizar una persona existente
Route::put('/people/{person}', [PersonController::class, 'update']);

// Eliminar una persona existente
Route::delete('/people/{person}', [PersonController::class, 'destroy']);