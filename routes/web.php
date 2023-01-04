<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
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


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/cancelation-policy',[PublicController::class,'cancelationPolicy'])->name('cancelation_policy');

Auth::routes();

Route::resource('hotel',HotelController::class);
Route::resource('packages',PackageController::class);
Route::resource('packages.booking',BookingController::class);
Route::resource('tour',TourController::class);
Route::resource('tour.booking',TourBookingController::class);
// ->names([
//         'show' => 'hotel'
// ]);

// Route::get('/hotels',[App\Http\Controllers\HotelController::class,'index'])->name('hotels.listing');
// Route::get('/hotel/view/{$id}',[App\Http\Controllers\HotelController::class,'hotelView'])->name('hotel.view');

