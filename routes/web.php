<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('customer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
Route::get('customer/create', [\App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
Route::post('customer', [\App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
Route::get('customer/download-pdf', [\App\Http\Controllers\CustomerController::class, 'downloadPdf'])->name('customer.pdf.download');


Route::get('city', [\App\Http\Controllers\CityController::class, 'showCities'])->name('city.index');
Route::get('city/download-pdf', [\App\Http\Controllers\CityController::class, 'downloadPdf'])->name('city.pdf.download');
