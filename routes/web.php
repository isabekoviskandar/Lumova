<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/' , [LandingPageController::class, 'index']);
Route::get('/about' , [LandingPageController::class, 'about']);
Route::get('/features' , [LandingPageController::class, 'features']);
