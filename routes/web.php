<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAppointmentController;


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
    return view('home');
});

// Route::post('appointment/add_appointment',[AppointmentController::class,'add_appointment_process'])->name('appointment.add');
Route::get('admin/dashboard',[AdminController::class,'dashboard']);
Route::get('admin/appointments',[AdminAppointmentController::class,'index']);
Route::get('/admin/appointment/status/{status}/{id}',[AdminAppointmentController::class,'edit']);

Route::get('appointment',[AppointmentController::class,'index']);
Route::post('appointment/add_appointment',[AppointmentController::class,'add_appointment_process'])->name('appointment.add');
