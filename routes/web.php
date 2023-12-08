<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorDashboardController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PractitionerController;
use App\Http\Controllers\PractitionerDashboardController;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if(auth('admin')->check()) {
        return redirect('/admin');
    }
    if(auth('doctor')->check()) {
        return redirect('/doctor');
    }
    if(auth('practitioner')->check()) {
        return redirect('/practitioner');
    }
    return redirect('/login');
})->name('index');




Route::get('/login', [AuthenticationController::class, 'login'])->name('login');

Route::post('/login', [AuthenticationController::class, 'authenticate'])->name('authenticate');

Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth:admin');




Route::get('admin/appoint/{doctor}', [AdminController::class, 'appoint_form'])->name('admin.appoint_form');
Route::post('admin/appoint/{doctor}', [AdminController::class, 'appoint'])->name('admin.appoint')->middleware('auth:admin');

Route::get('admin/practitioner/appoint/{practitioner}', [AdminController::class, 'practitioner_appoint_form'])->name('admin.practitioner.appoint_form');
Route::post('admin/practitioner/appoint/{practitioner}', [AdminController::class, 'practitioner_appoint'])->name('admin.practitioner.appoint')->middleware('auth:admin');

Route::get('admin/clinic/appoint/{clinic}', [AdminController::class, 'clinic_appoint_form'])->name('admin.clinic.appoint_form');
Route::post('admin/clinic/appoint/{clinic}', [AdminController::class, 'clinic_appoint'])->name('admin.clinic.appoint')->middleware('auth:admin');





Route::get('doctor/practitioner/appoint/{practitioner}', [DoctorDashboardController::class, 'practitioner_appoint_form'])->name('doctor.practitioner.appoint_form');
Route::post('doctor/practitioner/appoint/{practitioner}', [DoctorDashboardController::class, 'practitioner_appoint'])->name('doctor.practitioner.appoint')->middleware('auth:doctor');

Route::get('/doctor', [DoctorDashboardController::class, 'index'])->middleware('auth:doctor');
Route::get('doctor/appoint/{doctor}', [DoctorDashboardController::class, 'appoint_form'])->name('doctor.appoint_form');
Route::post('doctor/appoint/{doctor}', [DoctorDashboardController::class, 'appoint'])->name('doctor.appoint')->middleware('auth:doctor');




Route::prefix('practitioner')
    ->name('practitioner.')
    ->middleware('auth:practitioner')
    ->group(function () {

        Route::get('/', [PractitionerDashboardController::class, 'index'])->name('index');

        Route::get('/enqueue', [PractitionerDashboardController::class, 'enqueue_form'])->name('enqueue_form');
        Route::post('/enqueue', [PractitionerDashboardController::class, 'enqueue'])->name('enqueue');

        Route::get('/queue', [PractitionerDashboardController::class, 'queue'])->name('queue');

        Route::get('/collect_medical_history/{visit}', [PractitionerDashboardController::class, 'collect_medical_history'])->name('collect_medical_history');

        Route::post('/store_medical_history/{visit}', [PractitionerDashboardController::class, 'store_medical_history'])->name('store_medical_history');

});


Route::get('/doctor', [DoctorDashboardController::class, 'index'])->middleware('auth:doctor');
Route::get('practitioner/appoint/{doctor}', [DoctorDashboardController::class, 'appoint_form'])->name('doctor.appoint_form');
Route::post('practitioner/appoint/{doctor}', [DoctorDashboardController::class, 'appoint'])->name('doctor.appoint')->middleware('auth:doctor');



Route::resource('hospitals', HospitalController::class);
Route::resource('clinics', ClinicController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('practitioners', PractitionerController::class);

Route::post('consultation', function(Request $request, Visit $visit) {
    return "the great chatroom";
})->name('consultation.create');

Route::get('consultation/{ticket}', function() {
    return "the great chatroom";
})->name('consultation');
