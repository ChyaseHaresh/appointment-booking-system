<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAppointmentController;
use App\Http\Controllers\ConfirmMail;


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

Route::get('admin/appointments/confirmatio/{mail}/{id}',[ConfirmMail::class,'index']);

Route::get('/admin/appointment/status/{status}/{id}',[AdminAppointmentController::class,'edit']);

Route::get('appointment',[AppointmentController::class,'index']);

Route::post('/appointment/getDate/{country_id}',[AppointmentController::class,'fetchStates']);
Route::post('appointment/add_appointment',[AppointmentController::class,'add_appointment_process'])->name('appointment.add');

Route::post('admin/appointment/confirm_appointment',[ConfirmMail::class,'send_mail'])->name('email.send');

Route::get('admin/staff',[StaffController::class,'index']);
Route::get('admin/staff/add',[StaffController::class,'add_staff']);
Route::get('admin/staff/edit_staff/{id}',[StaffController::class,'edit']);
Route::post('admin/staff/manage_staff',[StaffController::class,'update'])->name('staff.update');
Route::get('admin/staff/delete/{id}',[StaffController::class,'destroy']);

Route::post('admin/staff/add_process',[StaffController::class,'add_staff_process'])->name('staff.add');
