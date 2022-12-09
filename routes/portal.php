<?php

use App\Http\Controllers\Portal\HotelController;
use Illuminate\Support\Facades\Route;


Route::resource('hotel',HotelController::class);

Route::post('/hotel/uploadImage',[HotelController::class,'uploadImage'])->name('hotel.upload_image');
Route::get('/hotel/media/{id}', [HotelController::class, 'getImages'])->name('hotel.get_images');
Route::post('/hotel/updateHotel/{id}',[HotelController::class,'updateHotel'])->name('hotel.update_hotel');


Route::get('/', [App\Http\Controllers\Portal\HomeController::class, 'index'])->name('home');
