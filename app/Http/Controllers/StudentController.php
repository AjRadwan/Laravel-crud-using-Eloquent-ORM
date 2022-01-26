<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  
    public function index(){
        return view('index');
    }

    public function create(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->city = $request->city;
        $student->save();
        return redirect()->route('indexx')->with('msg', "Student Added SuccessFully!");
    }
}
