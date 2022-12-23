<?php

use App\Http\Controllers\Portal\HotelController;
use App\Http\Controllers\portal\PackageController;
use App\Http\Controllers\Portal\TransportController;
use Illuminate\Support\Facades\Route;


Route::resource('package',PackageController::class);
Route::resource('hotel',HotelController::class);
Route::resource('transport',TransportController::class);

Route::post('/hotel/uploadImage',[HotelController::class,'uploadImage'])->name('hotel.upload_image');
Route::get('/hotel/media/{id}', [HotelController::class, 'getImages'])->name('hotel.get_images');
Route::post('/hotel/updateHotel/{id}',[HotelController::class,'updateHotel'])->name('hotel.update_hotel');

Route::post('/transport/uploadImage',[TransportController::class,'uploadImage'])->name('transport.upload_image');
Route::get('/transport/media/{id}', [TransportController::class, 'getImages'])->name('transport.get_images');


Route::post('/package/uploadImage',[PackageController::class,'uploadImage'])->name('package.upload_image');
Route::get('/package/media/{id}', [PackageController::class, 'getImages'])->name('package.get_images');


Route::get('/', [App\Http\Controllers\Portal\HomeController::class, 'index'])->name('home');
