<?php

use App\Http\Controllers\Dashboard\EditProfileController;
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
//Route::get('/reception/patient/create',[PatientController::class,'create'])->name('receptionist.create');


Route::group(['middleware' => ['web','auth:admin']], function () {

    Route::get('edit-profile', [EditProfileController::class, 'index']);
    Route::put('edit-profile', [EditProfileController::class, 'update']);

});

