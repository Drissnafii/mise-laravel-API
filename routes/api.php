<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Routes od Category CRUD

Route::get('/show', [CategoryController::class, 'show']);
Route::get('/store', [CategoryController::class, 'store']);
Route::get('/update', [CategoryController::class, 'update']);
Route::get('/destroy', [CategoryController::class, 'destroy']);
