<?php

use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\OffreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:sanctum');


Route::get('/index', [OffreController::class, 'index']);
Route::post('/store', [OffreController::class, 'store'])->middleware('auth:sanctum');

Route::post('/candidature', [CandidatureController::class, 'store']);

