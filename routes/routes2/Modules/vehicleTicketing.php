<?php
use Illuminate\Support\Facades\Route;


Route::namespace('Api\VehicleTicketing\Ticket')->middleware('auth:api')->group( function (){
    Route::get('vehicle/{id}/tickets', 'GetTicketsTodayByVehicleController');
    Route::get('ticket/{id}', 'GetTicketController');
    Route::get('ticket/code/date', 'GetTicketByCodeAndDateController');
    Route::get('report/tickets', 'GetTicketsReportByVehicleDateController');
    Route::get('report/tickets/expired', 'GetTicketCollectionExpiredByDateByVehicleByTurnController');
    Route::get('user/report/tickets', 'GetTicketCollectionByUserOfDateController');
    Route::get('user/production/tickets', 'GetTicketProductionByDateOfFleetController');
    Route::get('user/production-rancking/tickets', 'GetTicketProductionRanckingOfFleetByDateController');
    Route::get('user/production-rancking/tickets/type', 'GetTicketProductionRanckingOfFleetByDateByTypeController');
});
Route::namespace('Api\VehicleTicketing\Ticket')->group( function (){
    Route::get('report/tickets/export', 'ExportTicketsReportByVehicleDateController');
});

Route::middleware('auth:api')->namespace('Api\VehicleTicketing\TicketType')->group( function (){
    Route::get('ticket/type/{id}', 'GetTicketTypeController');
    Route::get('ticket/type/code/{code}', 'GetTicketTypeByCodeController');
    Route::get('ticket/types/list', 'GetTicketTypeCollectionController');
});

Route::namespace('Api\VehicleTicketing\TicketPrice')->group( function (){
    Route::get('ticket/price/{id}', 'GetTicketPriceController');
    Route::get('ticket/price/{code}/{idClient}', 'GetTicketPriceByCriteriaController');
});

Route::namespace('Api\VehicleTicketing\TicketMachine')->group( function (){
    Route::get('ticket/machine/{id}', 'GetTicketMachineController');
    Route::get('ticket/machine/imei/{imei}', 'GetTicketMachineByImeiController');
});


Route::namespace('Api\VehicleTicketing\Ticket')->group( function (){
    Route::post('ticket/save', 'CreateTicketController');
});
