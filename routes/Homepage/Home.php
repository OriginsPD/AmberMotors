<?php

use App\Http\Controllers\HomeController;

//Route::get('/',[HomeController::class,'index'])->name('index');

Route::group(['as' => 'Home.'], function () {
    Route::get('Brands', [HomeController::class, 'brand'])->name('brands');
    Route::get('Catalogue', [HomeController::class, 'catalogue'])->name('catalogue');
    Route::get('Teams', [HomeController::class, 'team'])->name('team');
});
