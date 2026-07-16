<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function addStudent(Request $request){
        return response()->json([
            'res' => 'getData'
        ]);
    }
}
