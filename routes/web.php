<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',function(){
    return view('welcome');
});

Route::get('/add-student',function(){
    return view('form');
});

Route::post('add-student',[StudentController::class,'addStudent'])->name('addStudent');