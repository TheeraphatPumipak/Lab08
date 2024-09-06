<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        $students=student::all();
        return view('student',compact('students'));
    }
    function insert(Request $request)
    {
        $new_menu = new student();
        $new_menu->stu_name = $request->name;
        $new_menu->age = $request->age;
        $new_menu->grade = $request->grade;
        $new_menu->save();
        return redirect()->back();
    }
}
