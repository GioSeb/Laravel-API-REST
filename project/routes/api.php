<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use app\Http\Controllers\StudentController;

Route::get('/students/', [\App\Http\Controllers\StudentController::class, 'index']);

Route::get('/students/{id}', [\App\Http\Controllers\StudentController::class, 'show']);

Route::post('/students', [\App\Http\Controllers\StudentController::class, 'store']);

Route::put('/students/{id}', [\App\Http\Controllers\StudentController::class, 'destroy']);

Route::patch('/students/{id}', [\App\Http\Controllers\StudentController::class, 'updatePartial']);

Route::delete('/students/{id}', [\App\Http\Controllers\StudentController::class, 'destroy']);
