<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::post('/add-student',[StudentController::class,'addStudent'])->name('addStudent');

Route::get('/StudList',function(){
    return view('studentList');
})->name('Studlist');

Route::get('/show-StudList',[StudentController::class,'showStudList'])->name('showStudList');


// StudentCOntroller::class,'showStudlist']