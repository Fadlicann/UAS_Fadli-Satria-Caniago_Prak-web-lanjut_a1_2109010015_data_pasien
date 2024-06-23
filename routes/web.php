<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'login']);
Route::post('/postlogin', [AuthController::class, 'postlogin']);

Route::get('/pasien', [PasienController::class, 'index']);
Route::post('/pasien/create', [PasienController::class, 'create']);
Route::get('/pasien/{id}/edit', [PasienController::class, 'edit']);
Route::post('/pasien/{id}/update', [PasienController::class, 'update']);
Route::get('/pasien/{id}/delete', [PasienController::class, 'delete']);
