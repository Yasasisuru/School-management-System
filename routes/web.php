<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});


Route::resource('/students',StudentsController::class);
