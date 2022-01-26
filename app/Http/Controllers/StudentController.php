<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  
    public function index(){
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function create(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->city = $request->city;
        $student->save();
        return redirect()->route('index')->with('msg', "Student Added SuccessFully!");
    }

    public function show(){
        return view('addStudent');
    }

    public function edit($id){
        $student = Student::find($id);
         return view('editStudent', compact('student'));
    }

    public function update(Request $request,$id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->city = $request->city;
        $student->save();
        return redirect()->route('index')->with('msg', "Student Updated SuccessFully!");

    }

    public function destroy($id){
        Student::destroy($id);   
      return redirect()->route('index')->with('msg', "Data deleted SuccessFully!");
    }
}
