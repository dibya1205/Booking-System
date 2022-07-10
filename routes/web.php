<?php
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PauthController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PhomeController;
use App\Http\Controllers\AptdeleteController;


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
})->name('doctor.welcome');
Route::post('/', [AppointmentController::class,'save'])->name('save.appointment');
Route::get('/doctor/login', function () {
    return view('Doctor.Auth.login');
})->name('doctor.login');
Route::get('/doctor/registration',function(){
    return view('Doctor.Auth.signup');
})->name('doctor.registration');

Auth::routes();
Route::get('/doctor/dashboard',[HomeController::class,'index'])->name('doctor.dashboard');

Route::post('/doctor/registration', [AuthController::class,'savedoc'])->name('doctor.registration.save');
Route::post('/doctor/login/save',[AuthController::class,'DocLogin'],function(){
    return redirect('/doctor/dashboard');
})->name('doctor.login.save');
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
})->name('logout');


Route::get('/patient/login', function () {
    return view('Patient.Auth.login');
})->name('patient.login');
Route::get('/patient/registration',function(){
    return view('Patient.Auth.signup');
})->name('patient.registration');

Auth::routes();
Route::get('patient/dashboard',[PhomeController::class,'ind'])->name('patient.dashboard');
Route::post('/patient/registration', [PauthController::class,'savepat'])->name('patient.registration.save');
Route::post('/patient/login/save',[PauthController::class,'PatLogin'],function(){
    return redirect('/patient/dashboard');
})->name('patient.login.save');
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::delete('/dashboard/{apt}', [AptdeleteController::class,'destroy'],function(){
    return redirect->back();
});