<?php

use App\Http\Controllers\Employee\Bike\BikeStatusController;
use App\Http\Controllers\Employee\BikeInfoController;
use App\Http\Controllers\Employee\Clients\ClientsController;
use App\Http\Controllers\Employee\CustomerInfoController;
use App\Http\Controllers\Employee\EmployeeDashController;
use App\Models\Payment\Penalty;


Route::resource('Owner', EmployeeDashController::class);

Route::group(['as' => 'Owner'], function () {
    Route::resource('Customer-list', CustomerInfoController::class);
    Route::resource('Bike', BikeInfoController::class);
    Route::resource('Status', BikeStatusController::class);

    Route::group(['as' => 'Customer.'], function () {
        Route::resource('Past', ClientsController::class);
    });
});
