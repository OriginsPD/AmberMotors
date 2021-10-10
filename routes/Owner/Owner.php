<?php

use App\Http\Controllers\Employee\BikeInfoController;
use App\Http\Controllers\Employee\Customer\CurrentCustomerController;
use App\Http\Controllers\Employee\Customer\PastCustomerController;
use App\Http\Controllers\Employee\CustomerInfoController;
use App\Http\Controllers\Employee\EmployeeDashController;
use App\Models\Payment\Penalty;


Route::resource('Owner', EmployeeDashController::class);

Route::group(['as' => 'Owner'], function () {
    Route::resource('Customer-list', CustomerInfoController::class);
    Route::resource('Bike', BikeInfoController::class);

    Route::group(['as' => 'Customer.'], function () {
        Route::resource('Current', CurrentCustomerController::class);
        Route::resource('Past', PastCustomerController::class);
        Route::resource('Penalty', Penalty::class);
    });
});
