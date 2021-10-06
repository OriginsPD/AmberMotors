<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[Authentication::class,'show_register'])->name('register.show');
Route::post('/register',[Authentication::class,'register'])->name('register');
Route::get('/login',[Authentication::class,'show_login'])->name('login.show');
Route::post('/login',[Authentication::class,'login'])->name('login');
Route::get('/logout',[Authentication::class,'logout'])->name('logout');