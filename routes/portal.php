<?php

use App\Http\Controllers\Portal\BookingController;
use App\Http\Controllers\Portal\HotelController;
use App\Http\Controllers\Portal\PackageBookingController;
use App\Http\Controllers\Portal\PackageController;
use App\Http\Controllers\Portal\TourBookingController;
use App\Http\Controllers\Portal\TourController;
use App\Http\Controllers\Portal\TransportController;
use Illuminate\Support\Facades\Route;


Route::resource('package',PackageController::class);
Route::resource('hotel',HotelController::class);
Route::resource('transport',TransportController::class);
Route::resource('tour',TourController::class);

Route::resource('packages.booking',PackageBookingController::class);
Route::resource('tours.booking',TourBookingController::class);

Route::get('/packages/bookings',[PackageBookingController::class,'bookingList'])->name('packages.bookings.list');
Route::get('/tours/bookings',[TourBookingController::class,'bookingList'])->name('tours.bookings.list');

Route::post('/hotel/uploadImage',[HotelController::class,'uploadImage'])->name('hotel.upload_image');
Route::get('/hotel/media/{id}', [HotelController::class, 'getImages'])->name('hotel.get_images');
Route::post('/hotel/updateHotel/{id}',[HotelController::class,'updateHotel'])->name('hotel.update_hotel');

Route::post('/transport/uploadImage',[TransportController::class,'uploadImage'])->name('transport.upload_image');
Route::get('/transport/media/{id}', [TransportController::class, 'getImages'])->name('transport.get_images');

Route::post('/tour/uploadImage',[TourController::class,'uploadImage'])->name('tour.upload_image');
Route::get('/tour/media/{id}', [TourController::class, 'getImages'])->name('tour.get_images');

Route::post('/package/uploadImage',[PackageController::class,'uploadImage'])->name('package.upload_image');
Route::get('/package/media/{id}', [PackageController::class, 'getImages'])->name('package.get_images');

Route::get('/package/status/{id}',[PackageController::class,'updateStatus'])->name('package.update_status');
Route::get('/tour/status/{id}',[TourController::class,'updateStatus'])->name('tour.update_status');

Route::get('/', [App\Http\Controllers\Portal\HomeController::class, 'index'])->name('home');
