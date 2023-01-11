<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index'] );
Route::post('/todos/create/{id?}', [TodoController::class,'create']);
Route::get('/todos/edit/{id?}', [TodoController::class, 'edit']);
Route::post('/todos/update/{id?}', [TodoController::class,'update']);
Route::post('/todos/delete/{id?}', [TodoController::class,'delete']);
Route::post('/todos/delete/{id?}', [TodoController::class, 'remove']);
