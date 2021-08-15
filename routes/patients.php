<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'mhk'], function()
{
  Route::resource('patient', PatientController::class);

  Route::post("patient/{id}", [PatientController::class,'update'])->name('patient.update');
});
