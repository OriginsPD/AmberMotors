<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\Register\CustomerController;
use App\Http\Controllers\Auth\Register\EmployeeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Employee\BikeInfoController;
use App\Http\Controllers\Employee\CustomerInfoController;
use App\Http\Controllers\Employee\EmployeeDashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'checkrole'], function () {

    // The Index Routes
    Route::view('/', 'welcome')->name('index');

    // Routes For Auth
    Route::resource('login', loginController::class);
    Route::resource('register', RegisterController::class);


    Route::group(['as' => 'Register'], function () {
        Route::resource('Customer', CustomerController::class);
        Route::resource('Employee', EmployeeController::class);
    });

});

Route::group(['as' => 'Home.'], function () {
    Route::get('Brands', [HomeController::class, 'brand'])->name('brands');
    Route::get('Catalogue', [HomeController::class, 'catalogue'])->name('catalogue');
    Route::get('Teams', [HomeController::class, 'team'])->name('team');
});

// Routes for the Owner/Employee Section
Route::resource('Owner', EmployeeDashController::class);

Route::group(['as' => 'Owner'], function () {
    Route::resource('Customerlist', CustomerInfoController::class);
    Route::resource('Bike', BikeInfoController::class);
});


// Routes for the Admin
Route::resource('Admin', AdminController::class);


Route::post('logout', [LogoutController::class, 'logout'])->name('logout');


