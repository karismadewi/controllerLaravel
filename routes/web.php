<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

Route::get('/', [pageController::class, 'input']);
Route::post('/output', [pageController::class, 'output']);