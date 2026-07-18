<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class StudentController extends Controller
{
    //
    public function addStudent(Request $request){
        
        $file = $request->file('file');

        $filename = time().''.$file->getClientOriginalName();

        $filepath = $file->storeAs('images',$filename,'public');

        $student = new student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->image = $filepath;
        $student->save();
        
        return response()->json([
            'res' => 'Student Created Successfully'
        ]);
    }
}
