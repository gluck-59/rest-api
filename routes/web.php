<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return false;
});



Route::get('/items', [TodoController::class, 'index']);
Route::get('/items/{id}', [TodoController::class, 'show']);
Route::post('/items', [TodoController::class, 'store']);
Route::put('/items/{id}', [TodoController::class, 'update']);
Route::delete('/items/{id}', [TodoController::class, 'destroy']);

