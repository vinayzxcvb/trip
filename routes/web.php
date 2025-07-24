<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AdventureController;
use App\Http\Controllers\DetailsController;
// use App\Http\Controllers\Controller;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CityController::class, 'index'] );
Route::get('/adventures/{city}', [AdventureController::class, 'Aindex'] );
Route::get('/adventure/details/{name}', [DetailsController::class, 'detail'] );