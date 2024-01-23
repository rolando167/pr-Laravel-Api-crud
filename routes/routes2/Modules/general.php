<?php
use Illuminate\Support\Facades\Route;

Route::namespace('Api\General\Vehicle')->middleware('auth:api')->group( function (){
    Route::get('user/vehicles', 'GetVehiclesByUserController');
    Route::get('vehicle/{id}', 'GetVehicleController');
});


