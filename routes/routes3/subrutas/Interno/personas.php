<?php

use App\Http\Controllers\Interno\Personas\PersonasController;
use Illuminate\Support\Facades\Route;

// http://127.0.0.1:8000/api/personas/
//----------------

Route::get("lista/{key}", [PersonasController::class, 'lista'])->where('key','^[a-zA-Z0-9-_\/]+$');
Route::post("create/{key}",  [PersonasController::class, 'create']);
Route::put("update/{key}/{id}",  [PersonasController::class, 'update']);
Route::delete("delete/{key}/{id}",  [PersonasController::class, 'delete']);


Route::post("agregarPersonaUser/{key}",  [PersonasController::class, 'agregarPersonaUser']);
Route::delete("deletePersonaUser/{key}",  [PersonasController::class, 'deletePersonaUser']);
Route::get("listaPersonaModulos/{key}", [PersonasController::class, 'listaPersonaModulos']);