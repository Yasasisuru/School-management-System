<?php

use App\Http\Controllers\batchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentControlelr;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});


Route::resource('/students',StudentsController::class);

Route::resource('/teachers',TeacherController::class);

Route::resource('/courses',CourseController::class);

Route::resource('/batches',batchController::class);

Route::resource('/enrollments',EnrollmentControlelr::class);

Route::resource('/payments',PaymentController::class);
