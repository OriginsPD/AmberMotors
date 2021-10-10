<?php

use App\Http\Controllers\Employee\BikeInfoController;
use App\Http\Controllers\Employee\CustomerInfoController;
use App\Http\Controllers\Employee\EmployeeDashController;



Route::resource('Owner', EmployeeDashController::class);

Route::group(['as' => 'Owner'], function () {
    Route::resource('Customer-list', CustomerInfoController::class);
    Route::resource('Bike', BikeInfoController::class);
});
