<?php

use App\Http\Controllers\AuthenticationController;
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
    // redirect to proper page based on role
})->middleware('auth');

Route::get('/login', [AuthenticationController::class, 'login'])->name('login');

Route::post('/login', [AuthenticationController::class, 'authenticate'])->name('authenticate');
