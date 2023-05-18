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


Route::get('/artisancall',function(){
    \Artisan::call('migrate',[
        '--path' =>'/database/migrations/2023_05_12_160335_create_destinations_table.php'
    ]);
    // array(
    //     '--path' =>'/database/migrations/2023_05_12_160335_create_destinations_table.php'
    // );
});

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
Route::get('/travel-guide',[PublicController::class,'travelGuide'])->name('travel-guide');
Route::get('/thank-you',[PublicController::class,'thankYou'])->name('thank-you');
Route::get('/testemail',[PublicController::class,'testEmail'])->name('test_emal');
Route::post('/subscribe',[PublicController::class,'subscribe'])->name('subscribe');
Route::get('/download-package-pdf/{package:slug}',[PackageController::class,'downloadPackagePdf'])->name('download.package.pdf');
Route::get('/download-tour-pdf/{tour:slug}',[TourController::class,'downloadTourPdf'])->name('download.tour.pdf');
Auth::routes();

// Route::resource('hotel',HotelController::class);
// Route::resource('packages.booking',BookingController::class);
// Route::resource('tour.booking',TourBookingController::class);

Route::post('/packages/{package}/booking',[PackageBookingController::class,'store'])->name('packages.booking.store');
Route::post('/tours/{tour}/booking',[TourBookingController::class,'store'])->name('tours.booking.store');

Route::get('/hotels/{hotel:slug}',[HotelController::class,'show'])->name('hotels.show');
Route::get('/hotels',[HotelController::class,'index'])->name('hotels.index');
// Route::get('/packages/{country}', function ($country) {
//     return $country;
// });
// Route::get('/packages/country/{country}',[PackageController::class,'country'])->name('packages.country');
Route::get('/packages/{package:slug}',[PackageController::class,'show'])->name('packages.show');
Route::get('/packages/{country?}/{city?}',[PackageController::class,'index'])->where('country', '[A-Za-z]+')->where('city', '[A-Za-z]+')->name('packages.index');
Route::get('/packages/top-category/{package:package_type}',[PackageController::class,'packageWithTopCategory'])->name('packages.top_category');


Route::get('/tours/top-category/{package:package_type}',[TourController::class,'tourWithTopCategory'])->name('tours.top_category');
Route::get('/tours/{tour:slug}',[TourController::class,'show'])->name('tours.show');
Route::get('/tours/{country?}/{city?}',[TourController::class,'index'])->where('city', '[A-Za-z]+')->where('city', '[A-Za-z]+')->name('tours.index');


Route::get('/destinations/{destination:slug}',[DestinationController::class,'show'])->name('destinations.show');
Route::get('/destinations',[DestinationController::class,'index'])->name('destinations.index');

