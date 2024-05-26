<?php

use Illuminate\Support\Facades\Route;
use Webkul\Blog\Http\Controllers\Admin\CityController;
use Webkul\Blog\Http\Controllers\Admin\DayController;
use Webkul\Blog\Http\Controllers\Admin\ExceptionDateController;
use Webkul\Blog\Http\Controllers\Admin\AvailableWorkingDayController;




Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/blog'], function () {
    
    Route::get('/', [CityController::class, 'index'])->name('admin.cities.index');
    Route::get('/create', [CityController::class, 'create'])->name('admin.cities.create');
    Route::post('/store', [CityController::class, 'store'])->name('admin.cities.store');
    Route::get('/edit/{id}', [CityController::class, 'edit'])->name('admin.cities.edit');
    Route::put('/update/{id}', [CityController::class, 'update'])->name('admin.cities.update');
    Route::delete('/delete/{id}', [CityController::class, 'delete'])->name('admin.cities.delete');

    Route::get('/working-daies', [DayController::class, 'index'])->name('admin.days.index');
    Route::get('/working-daies/create', [DayController::class, 'create'])->name('admin.days.create');
    Route::post('/working-daies/store', [DayController::class, 'store'])->name('admin.days.store');
    Route::get('/working-daies/edit/{id}', [DayController::class, 'edit'])->name('admin.days.edit');
    Route::put('/working-daies/update/{id}', [DayController::class, 'update'])->name('admin.days.update');
    Route::delete('/working-daies/delete/{id}', [DayController::class, 'delete'])->name('admin.days.delete');

    Route::resource('exceptions', ExceptionDateController::class);

    Route::resource('available-working-days', AvailableWorkingDayController::class);

});