<?php

use App\Http\Controllers\GiftController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GiftController::class, 'index'])->name('gifts.index');
Route::get('/cadeau/create', [GiftController::class, 'create'])->name('gifts.create');
Route::post('/cadeau', [GiftController::class, 'store'])->name('gifts.store');
Route::get('/cadeau/{gift}/edit', [GiftController::class, 'edit'])->name('gifts.edit');
Route::put('/cadeau/{gift}', [GiftController::class, 'update'])->name('gifts.update');
Route::delete('/cadeau/{gift}', [GiftController::class, 'destroy'])->name('gifts.destroy');
Route::get('/cadeau/{gift}', [GiftController::class, 'show'])->name('gifts.show');
