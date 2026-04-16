<?php

use App\Http\Controllers\GiftController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GiftController::class, 'index']);
Route::get('/cadeau/create', [GiftController::class, 'create']);
Route::post('/cadeau', [GiftController::class, 'store']);
Route::get('/cadeau/{gift}', [GiftController::class, 'show']);
