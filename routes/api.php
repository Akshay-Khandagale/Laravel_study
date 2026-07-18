<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::post('/add-student',[StudentController::class,'addStudent'])->name('addStudent');
