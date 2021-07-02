<?php

use App\Http\Controllers\Dashboard\AmbulanceController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\InsuranceController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\PaymentAccountController;
use App\Http\Controllers\Dashboard\ReceiptAccountController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\SingleServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/Dashboard_Admin', [DashboardController::class, 'index']);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


   //################################ dashboard user ##########################################
    Route::get('/dashboard/user', function () {
        return view('Dashboard.User.dashboard');
    })->middleware(['auth'])->name('dashboard.user');
    //################################ end dashboard user #####################################



    //################################ dashboard admin ########################################
    Route::get('/dashboard/admin', function () {
        return view('Dashboard.Admin.dashboard');
    })->middleware(['auth:admin'])->name('dashboard.admin');

    //################################ end dashboard admin #####################################

    //################################ dashboard doctor ########################################
    Route::get('/dashboard/doctor', function () {
        return view('Dashboard.Doctor.dashboard');
    })->middleware(['auth:doctor_logins'])->name('dashboard.doctor_logins');

    //################################ end dashboard doctor #####################################

    //################################ dashboard receptionist ########################################
    Route::get('/dashboard/receptionist', function () {
        return view('Dashboard.Receptionist.dashboard');
    })->middleware(['auth:receptionist_logins'])->name('dashboard.receptionist_logins');

    //################################ end dashboard receptionist #####################################

//---------------------------------------------------------------------------------------------------------------


    Route::middleware(['auth:admin'])->group(function () {

    //############################# sections route ##########################################

        Route::resource('Sections', SectionController::class);

    //############################# end sections route ######################################


     //############################# Doctors route ##########################################

        Route::resource('Doctors', DoctorController::class);
        Route::post('update_password', [DoctorController::class, 'update_password'])->name('update_password');
        Route::post('update_status', [DoctorController::class, 'update_status'])->name('update_status');

        //############################# end Doctors route ######################################


        //############################# sections route ##########################################

        Route::resource('Service', SingleServiceController::class);

        //############################# end sections route ######################################

        //############################# GroupServices route ##########################################

        Route::view('Add_GroupServices','livewire.GroupServices.include_create')->name('Add_GroupServices');

        //############################# end GroupServices route ######################################

        //############################# insurance route ##########################################

        Route::resource('insurance', InsuranceController::class);

        //############################# end insurance route ######################################

        //############################# Ambulance route ##########################################

        Route::resource('Ambulance', AmbulanceController::class);

        //############################# end Ambulance route ######################################


        //############################# Patients route ##########################################

        Route::resource('Patients', PatientController::class);

      // Route::post('/patients/store',[PatientController::class,'store'])->name('storePatients');
//        Route::resource('Patients', PatientController::class)->name('patients');
        Route::get('/patients/create',[PatientController::class,'create'])->name('createPatients');
        Route::post('/patients/store',[PatientController::class,'store'])->name('storePatients');


        //############################# end Patients route ######################################


        //############################# single_invoices route ##########################################

        Route::view('single_invoices','livewire.single_invoices.index')->name('single_invoices');

        //############################# end single_invoices route ######################################

        //############################# Receipt route ##########################################

        Route::resource('Receipt', ReceiptAccountController::class);

        //############################# end Receipt route ######################################

        //############################# Payment route ##########################################

        Route::resource('Payment', PaymentAccountController::class);

        //############################# end Payment route ######################################


    });


    require __DIR__.'/auth.php';


});

//Route::middleware(['auth:receptionist_logins'])->group(function () {
//    Route::resource('Patients', PatientController::class);
//    Route::view('single_invoices','livewire.single_invoices.index')->name('single_invoices');
//});


Route::group(['middleware' => ['auth:receptionist_logins,admin']], function() {
    Route::resource('patients', PatientController::class);
    Route::view('single_invoices','livewire.single_invoices.index')->name('single_invoices');
});





