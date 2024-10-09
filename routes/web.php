<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// установка CSRF остается за вами
Route::get('/api/items', [TodoController::class, 'index']);
Route::get('/api/items/{id}', [TodoController::class, 'show']);
Route::get('/api/items/status/{status}', [TodoController::class, 'byStatus']);

Route::post('/api/items', [TodoController::class, 'store']);
Route::put('/api/items/{id}', [TodoController::class, 'update']);

Route::delete('/api/items/{id}', [TodoController::class, 'destroy']);

