<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BmiController;

Route::get('/', [BmiController::class, 'index']);
Route::post('/calculate', [BmiController::class, 'calculate'])->name('bmi.calculate');
