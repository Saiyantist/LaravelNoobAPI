<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        //$students = DB::table('students')->get();
        return response()->json($students);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        //$student = DB::table('students')->find($id);
        return response()->json($student);
    }
}
