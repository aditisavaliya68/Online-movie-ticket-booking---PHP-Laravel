<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\TrailerController;
use App\Http\Controllers\frontend\MovieController;
use App\Http\Controllers\frontend\TicketController;
use App\Http\Controllers\frontend\FoodController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\conjuring2Controller;
use App\Http\Controllers\frontend\avatarController;
use App\Http\Controllers\frontend\pathanController;
use App\Http\Controllers\frontend\formController;
use App\Http\Controllers\frontend\bookingController;
use App\Models\booking;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/conjuring2',[conjuring2Controller::class, 'index']);
Route::get('/avatar',[avatarController::class, 'index']);
Route::get('/pathan',[pathanController::class, 'index']);
Route::get('/trailer',[TrailerController::class, 'index']);
Route::get('/movie',[MovieController::class, 'index']);
Route::get('/ticket',[TicketController::class, 'index']);
Route::get('/food',[FoodController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']); 



Route::get('/booking',[bookingController::class,'index']);
Route::post('/booking',[bookingController::class,'register']);

Route::get('/booking/view',[bookingController::class,'view']);
Route::get('/booking/delete/{id}',[bookingController::class,'delete'])->name('booking.delete');
Route::get('/booking/edit/{id}',[bookingController::class,'edit'])->name('booking.edit');
Route::post('/booking/update/{id}',[bookingController::class,'update'])->name('booking.update');

Route::get('/booking/back',[bookingController::class,'back'])->name('booking.back');
// Route::get('/booking', function() {
//     $booking = Booking::all();
//     echo "<pre>";
//     print_r($booking->toArray());
// });