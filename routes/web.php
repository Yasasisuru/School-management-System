<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});


Route::resource('/students',StudentsController::class);

Route::resource('/teachers',TeacherController::class);

Route::resource('/courses',CourseController::class);
