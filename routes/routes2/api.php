<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');


Route::middleware('auth:api')->group(function() {
    Route::post('logout', 'AuthController@logout');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('date',function(){
   $today = new \DateTime('now');
   return $today->format('Y-m-d H:i:s');
});

include 'Modules/vehicleTicketing.php';
include 'Modules/dashboard.php';
include 'Modules/auth.php';
include 'Modules/despacho.php';
include 'Modules/general.php';
include 'Modules/administracion.php';


Route::get('v1/erts', function(){
        $all = \App\Models\Older\ErtUbicacion::all();
    return response()->json($all);
});

Route::namespace('Older')->group( function () {
    Route::post('v1/ert_state', 'RegisterErtStateController');
});


Route::get('/clear', function() {
    \Artisan::call('route:cache');
    \Artisan::call('config:cache');
    \Artisan::call('cache:clear');
    return 'Routes cache cleared';
});
