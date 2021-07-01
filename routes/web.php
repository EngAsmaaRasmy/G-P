<?php


use App\Http\Controllers\Dashboard\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PatientController;

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

<<<<<<< HEAD
//Route::get('/reception/patient/create',[PatientController::class,'create'])->name('receptionist.create');

=======
Route::get('/reception/patient/create',[PatientController::class,'create'])->name('reception.patient.create');
//
//Route::get('/patients/create',[PatientController::class,'create'])->name('createPatientst');
//Route::post('/patients/store',[PatientController::class,'store'])->name('storePatientst');
//
//
>>>>>>> e5ed0286d9bf756aa8c5503fcb093d6a35981f28





