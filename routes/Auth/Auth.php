<?php

use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\Register\CustomerController;
use App\Http\Controllers\Auth\Register\EmployeeController;
use App\Http\Controllers\Auth\RegisterController;


Route::resource('login', loginController::class);
Route::resource('register', RegisterController::class);


Route::group(['as' => 'Register'], function () {
    Route::resource('Customer', CustomerController::class);
    Route::resource('Employee', EmployeeController::class);
});
