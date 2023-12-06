<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HospitalController;
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
    if(auth('admin')) {
        return redirect('/admin');
    }
    if(auth('doctor')) {
        return redirect('/doctor');
    }
    if(auth('practitioner')) {
        return redirect('/practitioner');
    }
    return redirect('/login');
});

Route::get('/login', [AuthenticationController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [AuthenticationController::class, 'authenticate'])->name('authenticate')->middleware('guest');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth:admin');


Route::resource('hospitals', HospitalController::class);
Route::resource('clinics', HospitalController::class);
Route::resource('doctors', HospitalController::class);
Route::resource('practitioners', HospitalController::class);
