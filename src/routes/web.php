<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;

Route::get('/', [TestingController::class, 'index']);
Route::post('/contacts/confirm', [TestingController::class, 'index']);
Route::get('/confirm', [TestingController::class, 'confirm']);
Route::get('/login', [TestingController::class, 'login']);
Route::post('/login/admin', [TestingController::class, 'admin']);
Route::get('/register', [TestingController::class, 'register']);
Route::post('/contacts/thanks', [ContactController::class, 'confirm']);
Route::post('/contacts', [TestingController::class, 'store']);
