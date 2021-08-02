<?php

use App\Http\Controllers\Api\ProductApi;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApi;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AppointmentController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::resource('country', CountryController::class);

// Route::resource('dashboard/users', UserController::class);
Route::resource('api/users', UserApi::class);
Route::get('api/users/iscodevalid/{code}', [UserApi::class,'isCodeValid'])->name('users.codecheck');


Route::resource('api/product', ProductApi::class);
Route::get('api/productsubcategory/{id}', [ProductApi::class,'subCategoryList'])->name('product.subcatapi');
// Forms
Route::get('api/productparentadd', [ProductApi::class,'parentForm'])->name('product.parentform');
Route::get('api/productcategoryadd', [ProductApi::class,'categoryForm'])->name('product.categoryform');
Route::get('api/productsubcategoryadd', [ProductApi::class,'subCategoryForm'])->name('product.subcategoryform');
Route::get('api/productbrandadd', [ProductApi::class,'brandForm'])->name('product.brandform');
Route::get('api/productmanufactureradd', [ProductApi::class,'manufacturerForm'])->name('product.manufacturerform');
Route::get('api/productunitadd', [ProductApi::class,'unitForm'])->name('product.unitform');

//
Route::get('api/productlastparent', [ProductApi::class,'lastParent'])->name('product.lastparentapi');
Route::get('api/productlastcategory', [ProductApi::class,'lastCategory'])->name('product.lastcategoryapi');
Route::get('api/productlastsubcategory', [ProductApi::class,'lastSubCategory'])->name('product.lastsubcategoryapi');
Route::get('api/productlastbrand', [ProductApi::class,'lastBrand'])->name('product.lastbrandapi');


// Start Patients Route
// Route::get('patients', [PatientController::class,'index'])->name('patient.index');
// Route::get('patient/create', [PatientController::class,'create'])->name('patient.create');
// Route::post('patients', [PatientController::class,'store'])->name('patient.store');
// Route::get('patient/{patient}/edit', [PatientController::class,'edit'])->name('patient.edit');
// Route::post('patient/update', [PatientController::class,'update'])->name('patient.update');
// Route::post('patient/destroy', [PatientController::class,'destroy'])->name('patient.destroy');
// End Patients Route

// Start Blood route
// Route::get('bloods', [BloodController::class,'index'])->name('blood.index');
// Route::get('blood/create', [BloodController::class,'create'])->name('blood.create');
// Route::post('bloods', [PatientController::class,'store'])->name('blood.store');
// Route::get('blood/{blood}/edit', [BloodController::class,'edit'])->name('blood.edit');
// Route::post('blood/update', [BloodController::class,'update'])->name('blood.update');
// Route::post('blood/destroy', [BloodController::class,'destroy'])->name('blood.destroy');
// End Blood route

// Start blood route
Route::resource('blood', BloodController::class);
Route::post('blood/{id}', [BloodController::class, 'update'])->name('blood.update');
// End blood route

// Start room route
Route::post('room/{id}', [RoomController::class, 'update'])->name('room.update');
Route::get('room/booking/all', [RoomController::class, 'all_booking'])->name('room.all_booking');
Route::get('room/booking', [RoomController::class, 'booking'])->name('room.booking');
Route::resource('room', RoomController::class);
// End room route

// Start appointment route

Route::get('appointment/doctor', [AppointmentController::class, 'doctor'])->name('appointment.doctor');
Route::post('appointment/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
Route::resource('appointment', AppointmentController::class);
// End appointment route
