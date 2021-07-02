<?php


use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
>>>>>>> 4a78743d62fa31c62bdf383954fc53e2d2dc7090





