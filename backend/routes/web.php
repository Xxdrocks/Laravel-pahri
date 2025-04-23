<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index' ])->name('getuser');
Route::post('/', [UserController::class, 'store' ])->name('register');
Route::get('/{id}', [UserController::class, 'show' ])->name('showuser');