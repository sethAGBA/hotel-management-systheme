<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\UserInformationController;
// use App\Http\Controllers\HotelFormController;

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/user-information', [UserInformationController::class, 'create'])->name('user-information.create');
// Route::post('/user-information', [UserInformationController::class, 'store'])->name('user-information.store');
// Route::get('/user-information/printable', [UserInformationController::class, 'printable'])->name('user-information.printable');

// // Routes pour HotelForm
// Route::get('/hotel-form', [HotelFormController::class, 'create'])->name('hotel-form.create');
// Route::post('/hotel-form', [HotelFormController::class, 'store'])->name('hotel-form.store');


use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserInformationController;
use App\Http\Controllers\HotelFormController;

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes pour UserInformation
Route::get('/user-information', [UserInformationController::class, 'create'])->name('user-information.create');
Route::post('/user-information', [UserInformationController::class, 'store'])->name('user-information.store');
Route::get('/user-information/printable', [UserInformationController::class, 'printable'])->name('user-information.printable');

// Routes pour HotelForm
Route::get('/hotel-form', [HotelFormController::class, 'create'])->name('hotel-form.create');
Route::post('/hotel-form', [HotelFormController::class, 'store'])->name('hotel-form.store');
Route::get('/hotel-form/printable', [HotelFormController::class, 'printable'])->name('hotel-form.printable');
// Routes pour UserInformation
Route::get('/user-information/printable', [UserInformationController::class, 'printable'])->name('user-information.printable');

// Routes pour HotelForm
Route::get('/hotel-form/printable', [HotelFormController::class, 'printable'])->name('hotel-form.printable');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
