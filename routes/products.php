<?php

use App\Http\Controllers\Products\ProductBrandController;
use App\Http\Controllers\Products\ProductCategoryController;
Use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Products\ProductManufacturerController;
use App\Http\Controllers\Products\ProductParentController;
use App\Http\Controllers\Products\ProductSubCategoryController;
use App\Http\Controllers\Products\ProductUnitController;
use Illuminate\Support\Facades\Route;

Route::resource('product', ProductController::class);
Route::post("product/{id}", [ProductController::class,'update'])->name('product.update');
Route::resource('product_parent', ProductParentController::class);
Route::resource('product_category', ProductCategoryController::class);
Route::resource('product_subcategory', ProductSubCategoryController::class);
Route::resource('product_brand', ProductBrandController::class);
Route::resource('product_manufacturer', ProductManufacturerController::class);
Route::resource('product_unit', ProductUnitController::class);
