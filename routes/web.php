<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'getIndex'])->name('index');
Route::get('/ubytovanie', [MainController::class, 'getAccommodation'])->name('accommodation');
Route::get('/ubytovanie-detail', [MainController::class, 'getAccommodationDetail'])->name('accommodation-detail');
Route::get('/cennik', [MainController::class, 'getPriceList'])->name('price-list');
Route::get('/formular', [MainController::class, 'getReservationForm'])->name('reservation-form');
Route::get('/alpaky', [MainController::class, 'getAlapcas'])->name('alpacas');
Route::get('/eventy', [MainController::class, 'getEvents'])->name('events');
Route::get('/aktivity', [MainController::class, 'getActivities'])->name('activities');
