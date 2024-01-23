<?php
use Illuminate\Support\Facades\Route;

Route::namespace('Api\Admin\Client')->group( function (){
    Route::get('client/{id}', 'GetClientController');
    Route::delete('client/{id}', 'DeleteClientController');
    Route::put('client/{id}/trash', 'TrashClientController');
    Route::put('client/{id}/restore', 'RestoreClientController');
    Route::post('client', 'CreateClientController');
    Route::put('client/{id}', 'UpdateClientController');

    Route::get('clients', 'GetClientCollectionController');
    Route::get('clients/trashed', 'GetClientTrashCollectionController');
    Route::get('clients/parent/{parent}', 'GetClientCollectionByParentController');
    Route::get('clients/trashed/parent/{parent}', 'GetClientTrashCollectionByParentController');

});


Route::namespace('Api\Admin\User')->group( function (){
    Route::get('user/{id}', 'GetUserController');
    Route::delete('user/{id}', 'DeleteUserController');
    Route::put('user/{id}/trash', 'TrashUserController');
    Route::put('user/{id}/restore', 'RestoreUserController');
    Route::post('user', 'CreateUserController');
    Route::put('user/{id}', 'UpdateUserController');
    Route::get('client/{id}/users', 'GetUserCollectionByClientController');
    Route::get('client/{id}/users/trashed', 'GetUserTrashCollectionByClientController');

    Route::put('user/{id}/actived', 'UpdateActivedController');
    Route::put('user/{id}/password', 'UpdatePasswordController');
    Route::post('user/{id}/modules', 'AssignModulesController');
});

Route::namespace('Api\Admin\VehicleBrand')->group( function (){
    Route::post('vehicle_brand', 'CreateVehicleBrandController');
    Route::put('vehicle_brand/{id}', 'UpdateVehicleBrandController');
    Route::delete('vehicle_brand/{id}', 'DeleteVehicleBrandController');
    Route::put('vehicle_brand/{id}/trash', 'TrashVehicleBrandController');
    Route::put('vehicle_brand/{id}/restore', 'RestoreVehicleBrandController');
    Route::get('vehicle_brands', 'GetVehicleBrandCollectionController');
    Route::get('vehicle_brands/trashed', 'GetVehicleBrandCollectionTrashedController');
});

Route::namespace('Api\Admin\VehicleModel')->group( function (){
    Route::post('vehicle_model', 'CreateVehicleModelController');
    Route::put('vehicle_model/{id}', 'UpdateVehicleModelController');
    Route::delete('vehicle_model/{id}', 'DeleteVehicleModelController');
    Route::put('vehicle_model/{id}/trash', 'TrashVehicleModelController');
    Route::put('vehicle_model/{id}/restore', 'RestoreVehicleModelController');
    Route::get('vehicle_models', 'GetVehicleModelCollectionController');
    Route::get('vehicle_models/trashed', 'GetVehicleModelCollectionTrashedController');

    Route::get('/brand/{id}/vehicle_models', 'GetCollectionByBrandController');

});

Route::namespace('Api\Admin\VehicleClass')->group( function (){
    Route::post('vehicle_class', 'CreateController');
    Route::put('vehicle_class/{id}', 'UpdateController');
    Route::delete('vehicle_class/{id}', 'DeleteController');
    Route::put('vehicle_class/{id}/trash', 'TrashController');
    Route::put('vehicle_class/{id}/restore', 'RestoreController');
    Route::get('vehicle_classes', 'GetCollectionController');
    Route::get('vehicle_classes/trashed', 'GetCollectionTrashedController');
});

Route::namespace('Api\Admin\OperatorPhone')->group( function (){
    Route::post('phone_operator', 'CreateController');
    Route::put('phone_operator/{id}', 'UpdateController');
    Route::delete('phone_operator/{id}', 'DeleteController');
    Route::put('phone_operator/{id}/trash', 'TrashController');
    Route::put('phone_operator/{id}/restore', 'RestoreController');
    Route::get('phone_operators', 'GetCollectionController');
    Route::get('phone_operators/trashed', 'GetCollectionTrashedController');
});

Route::namespace('Api\Admin\SimCard')->group( function (){
    Route::post('sim_card', 'CreateController');
    Route::put('sim_card/{id}', 'UpdateController');
    Route::delete('sim_card/{id}', 'DeleteController');
    Route::put('sim_card/{id}/trash', 'TrashController');
    Route::put('sim_card/{id}/restore', 'RestoreController');
    Route::get('sim_cards', 'GetCollectionController');
    Route::get('sim_cards/trashed', 'GetCollectionTrashedController');
    Route::get('phone_operator/{id}/sim_cards', 'GetCollectionByOperatorController');

    Route::get('client/{id}/sim_cards', 'GetCollectionByClientController');
    Route::get('client/{id}/sim_cards/trashed', 'GetCollectionTrashedByClientController');
});

Route::namespace('Api\Admin\GpsModel')->group( function (){
    Route::post('gps_model', 'CreateController');
    Route::put('gps_model/{id}', 'UpdateController');
    Route::delete('gps_model/{id}', 'DeleteController');
    Route::put('gps_model/{id}/trash', 'TrashController');
    Route::put('gps_model/{id}/restore', 'RestoreController');
    Route::get('gps_models', 'GetCollectionController');
    Route::get('gps_models/trashed', 'GetCollectionTrashedController');
});

Route::namespace('Api\Admin\Gps')->group( function (){
    Route::post('gps', 'CreateController');
    Route::put('gps/{id}', 'UpdateController');
    Route::delete('gps/{id}', 'DeleteController');
    Route::put('gps/{id}/trash', 'TrashController');
    Route::put('gps/{id}/restore', 'RestoreController');
    //Route::get('gpss', 'GetCollectionController');
    Route::get('gpses/trashed', 'GetCollectionTrashedController');
    Route::get('client/{id}/gpses', 'GetCollectionByClientController');
    Route::get('client/{id}/gpses/trashed', 'GetCollectionTrashedByClientController');
});

Route::namespace('Api\Admin\Vehicle')->group( function (){
    Route::post('vehicle', 'CreateController');
    Route::put('vehicle/{id}', 'UpdateController');
    Route::delete('vehicle/{id}', 'DeleteController');
    Route::put('vehicle/{id}/trash', 'TrashController');
    Route::put('vehicle/{id}/restore', 'RestoreController');

    Route::get('client/{id}/vehicles', 'GetVehicleCollectionByClientController');
});

Route::namespace('Api\Admin\Ert')->group( function (){
    Route::post('ert', 'CreateController');
    Route::put('ert/{id}', 'UpdateController');
    Route::delete('ert/{id}', 'DeleteController');
    Route::put('ert/{id}/trash', 'TrashController');
    Route::put('ert/{id}/restore', 'RestoreController');

    Route::get('client/{id}/erts', 'GetCollectionByClientController');
    Route::put('ert/{id}/sutran', 'UpdateSutranController');
});

Route::namespace('Api\Admin\Module')->group( function (){
    /*Route::post('ert', 'CreateController');
    Route::put('ert/{id}', 'UpdateController');
    Route::delete('ert/{id}', 'DeleteController');
    Route::put('ert/{id}/trash', 'TrashController');
    Route::put('ert/{id}/restore', 'RestoreController');*/

    Route::get('modules', 'GetCollectionController');
});


Route::namespace('Api\Admin\TypeInvoicing')->group( function (){
    Route::post('invoicing_type', 'CreateController');
    Route::put('invoicing_type/{id}', 'UpdateController');
    Route::delete('invoicing_type/{id}', 'DeleteController');
    Route::put('invoicing_type/{id}/trash', 'TrashController');
    Route::put('invoicing_type/{id}/restore', 'RestoreController');
    Route::get('invoicing_types', 'GetCollectionController');
    Route::get('invoicing_types/trashed', 'GetCollectionTrashedController');
});
Route::namespace('Api\Admin\TypePay')->group( function (){
    Route::post('pay_type', 'CreateController');
    Route::put('pay_type/{id}', 'UpdateController');
    Route::delete('pay_type/{id}', 'DeleteController');
    Route::put('pay_type/{id}/trash', 'TrashController');
    Route::put('pay_type/{id}/restore', 'RestoreController');
    Route::get('pay_types', 'GetCollectionController');
    Route::get('pay_types/trashed', 'GetCollectionTrashedController');
});
