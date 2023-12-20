<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BookingController;

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
// routes/web.php



Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/drivers/register', [DriverController::class, 'showRegistrationForm'])->name('driver.register');
Route::post('/drivers/register', [DriverController::class, 'register']);
Route::get('/drivers/dashboard', [DriverController::class, 'dashboard'])->name('driver.dashboard');

Route::post('/drivers/accept-booking/{booking}', [DriverController::class, 'acceptBooking'])->name('driver.accept.booking');
Route::post('/drivers/reject-booking/{booking}', [DriverController::class, 'rejectBooking'])->name('driver.reject.booking');

Route::post('/make-booking', [BookingController::class, 'makeBooking'])->name('make.booking');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
