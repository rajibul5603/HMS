<?php

use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Auth\RoleController;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'mhk'], function()
{
  Route::resource('users', UserController::class);
  Route::resource('role', RoleController::class);
  Route::post("role/{id}", [RoleController::class,'update'])->name('role.update');
  Route::post("users/{id}", [RoleController::class,'update'])->name('users.update');
});
