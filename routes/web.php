<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'getIndex'])->name('index');
Route::get('/ubytovanie', [MainController::class, 'getAccommodation'])->name('accommodation');
Route::get('/apartman', [MainController::class, 'getAccommodationDetail'])->name('accommodation-detail');

