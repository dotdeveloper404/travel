<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PackageBookingController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Portal\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TourBookingController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

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

Route::get('/clear-cache',function(){
    \Artisan::call('cache:clear');
    dd("Cache is cleared");
});

Route::get('/storage-link',function(){
    \Artisan::call('storage:link');
    dd("storage linked");
});


Route::get('/',[PublicController::class,'index'])->name('home');

Route::get('/cancelation-policy',[PublicController::class,'cancelationPolicy'])->name('cancelation_policy');
Route::get('/contact',[PublicController::class,'contactUs'])->name('contact_us');
Route::get('/about',[PublicController::class,'aboutUs'])->name('about_us');
Route::get('/testemail',[PublicController::class,'testEmail'])->name('test_emal');

Auth::routes();

// Route::resource('hotel',HotelController::class);
// Route::resource('packages.booking',BookingController::class);
// Route::resource('tour.booking',TourBookingController::class);

Route::post('/packages/{package}/booking',[PackageBookingController::class,'store'])->name('packages.booking.store');
Route::post('/tours/{tour}/booking',[TourBookingController::class,'store'])->name('tours.booking.store');

Route::get('/hotels/{hotel:slug}',[HotelController::class,'show'])->name('hotels.show');
Route::get('/hotels',[HotelController::class,'index'])->name('hotels.index');

Route::get('/packages/{package:slug}',[PackageController::class,'show'])->name('packages.show');
Route::get('/packages',[PackageController::class,'index'])->name('packages.index');
Route::get('/tours/{tour:slug}',[TourController::class,'show'])->name('tours.show');
Route::get('/tours',[TourController::class,'index'])->name('tours.index');

Route::get('/destinations/{destination:slug}',[DestinationController::class,'show'])->name('destinations.show');
Route::get('/destinations',[DestinationController::class,'index'])->name('destinations.index');
