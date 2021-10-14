<?php


use App\Http\Controllers\Admin\AdminEmployeeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminController;
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
    require __DIR__.'/Auth/Auth.php';

});

// Route Home Controller Pink and Sliver Controller
require __DIR__.'/Homepage/Home.php';


// Routes for the Owner/Employee Section Akeem Henry Controllers
require __DIR__ . '/Owner/Owner.php';


// Routes for the Admin Prokushxx Controller
Route::resource('Admin', AdminController::class);
Route::get('Users',function(){return view('Admin.users');})->name('user');
Route::resource('AdminEmployee', AdminEmployeeController::class);
Route::resource('AdminCategory', AdminCategoryController::class);
Route::resource('AdminUser', AdminUserController::class);


//Route For Logout
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');


