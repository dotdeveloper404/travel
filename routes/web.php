<?php

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

Route::get('/', function () {
    return view('frontend.layouts.index');
});

Auth::routes();

Route::resource('hotel',App\Http\Controllers\HotelController::class);
// ->names([
//         'show' => 'hotel'
// ]);

// Route::get('/hotels',[App\Http\Controllers\HotelController::class,'index'])->name('hotels.listing');
// Route::get('/hotel/view/{$id}',[App\Http\Controllers\HotelController::class,'hotelView'])->name('hotel.view');

