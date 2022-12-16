<?php

use App\Http\Controllers\Portal\HotelController;
use App\Http\Controllers\Portal\HotelRoomController;
use App\Http\Controllers\Portal\TransportController;
use Illuminate\Support\Facades\Route;


Route::resource('hotel',HotelController::class);
Route::resource('transport',TransportController::class);
Route::resource('hotel.hotel-rooms',HotelRoomController::class);

Route::post('/hotel/uploadImage',[HotelController::class,'uploadImage'])->name('hotel.upload_image');
Route::get('/hotel/media/{id}', [HotelController::class, 'getImages'])->name('hotel.get_images');
Route::post('/hotel/updateHotel/{id}',[HotelController::class,'updateHotel'])->name('hotel.update_hotel');

Route::post('/transport/uploadImage',[TransportController::class,'uploadImage'])->name('transport.upload_image');
Route::get('/transport/media/{id}', [TransportController::class, 'getImages'])->name('transport.get_images');

Route::get('/', [App\Http\Controllers\Portal\HomeController::class, 'index'])->name('home');
