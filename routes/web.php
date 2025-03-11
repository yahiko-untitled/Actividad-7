<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\EnrollmentController;

Route::resource('users', UserController::class);
Route::resource('courses', CourseController::class);
Route::resource('groups', GroupController::class);
Route::resource('enrollments', EnrollmentController::class);

