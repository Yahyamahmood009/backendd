<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorsignupController; 
use App\Http\Controllers\DPrescriptionController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Admin;
use App\Models\Doctorsignup;
use App\Models\Patient;

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
    return view('pages/main_pages/Login_main');
});
Route::get('/signup', function () {
    return view('pages/main_pages/signup_main');
});

Route::get('Patient_signup', function () {
    return view('pages/patient_pages/Patient_signup');
});
Route::get('Doctor_signup', function () {
    return view('pages/doctor_pages/Doctor_signup');
});
Route::get('Doctor_signup', function () {
    return view('pages/doctor_pages/Doctor_signup');
});
Route::get('Doctor_login', function () {
    return view('pages/doctor_pages/Doctor_login');
});
Route::get('Patient_login', function () {
    return view('pages/patient_pages/Patient_login');
});




Route::get('Patient_Deshboard', function () {
    return view('pages/patient_pages/Patient_deshboard');
});



Route::post('store',[PatientController::class,'store']);


Route::get('Patient_appointment_Deshboard', function () {
    return view('pages/patient_pages/patient_appointment');
});
Route::get('Patient_appointment_Deshboard',[AppointmentController::class,'show']);



Route::get('/Doctor_Deshboard', function () {
    return view('pages/doctor_pages/Doctor_deshboard');
});

Route::get('/Doctor_Deshboard_history', function () {
    return view('pages/doctor_pages/History_deshboard');
});
Route::get('/Doctor_Deshboard_prescription', function () {
    return view('pages/doctor_pages/Digital_prescription');
});



Route::get('/Doctor_Deshboard_appointment', function () {
    return view('pages/doctor_pages/Appointment_deshboard');
});
Route::post('appoint_store',[AppointmentController::class,'appoint_store']);









Route::post('D_signup_store',[DoctorsignupController::class,'D_signup_store']);
Route::get('D_presciption_store',[DPrescriptionController::class,'D_presciption_store']);




Route::get('/Admin_Deshboard', function () {
    return view('pages/admin_pages/admin_deshboard');
});
Route::get('/Admin_Login', function () {
    return view('pages/admin_pages/admin_signin');
});



Route::get('Patient-side-admin',[PatientController::class,'show']);

Route::get('Patient-edit-admin/{patient_id}',[PatientController::class,'edit']);

Route::post('P_update/{patient_id}',[PatientController::class,'update']);

Route::get('P_delete/{patient_id}',[PatientController::class,'destroy']);







Route::get('doctor-side-admin',[DoctorsignupController::class,'show']);

Route::get('doctor-edit-admin/{doctor_id}',[DoctorsignupController::class,'edit']);

Route::post('D_update/{doctor_id}',[DoctorsignupController::class,'update']);

Route::get('D_delete/{doctor_id}',[DoctorsignupController::class,'destroy']);

