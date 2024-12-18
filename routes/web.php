<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);
Route::post('/todo/create', [TodoController::class, 'store']);
