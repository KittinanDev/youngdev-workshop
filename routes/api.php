<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\CodeRunnerController;

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}/slides', [SlideController::class, 'byCourse']);
Route::get('/slides/{id}', [SlideController::class, 'show']);
Route::post('/runner', [CodeRunnerController::class, 'execute']);
