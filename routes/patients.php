<?php

use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;


Route::resource('patient', PatientsController::class);

Route::post("patient/{id}", [PatientsController::class,'update'])->name('patient.update');
