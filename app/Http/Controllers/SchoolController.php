<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Collection;

class SchoolController extends Controller
{

    public $students;
    
    public function index ()
    {
        $students = $this->students;
        $students = DB::table('students')->get();
    
        // $students = DB::table('students')->where('grade', 10)->first();
        
        // $students = DB::table('students')->whereBetween('age', [10, 15])->get();

        // $students = DB::table('students')->where('city', 'Manila')->first();

        // $students = DB::table('students')->orderBy('age', 'desc')->get();

        // DB::table('students')
        // ->select('students.*', 'teachers.name AS teacher_name')
        // ->leftJoin('teachers', 'students.teacher_id', '=', 'teachers.id')
        // ->get()->dump();


        // config()->set('database.connections.mysql.strict', false); //needs neto para gumana itong sa baba

        // DB::table('teachers')
        // ->selectRaw('teachers.*, COUNT(students.id) AS student_count')
        // ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
        // ->groupBy('teachers.id')
        // ->get()
        // ->dump();


        // $students = DB::table('students')
        // ->join('subjects', 'students.subject_id', '=', 'subjects.id')
        // ->select('students.*', 'subjects.name AS subject_name')
        // ->get()
        // ->dump();


        // DB::table('students')
        // ->leftJoin('scores', 'students.id', '=', 'scores.student_id')
        // ->selectRaw('students.*, AVG(scores.score) AS average_score')
        // ->groupBy('students.id')
        // ->get()
        // ->dump();


        // DB::table('teachers')
        // ->selectRaw('teachers.*, COUNT(students.id) AS student_count')
        // ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
        // ->groupBy('teachers.id')
        // ->orderByDesc('student_count')
        // ->limit(5)
        // ->get();
        // ->dump();



        // DB::table('teachers')
        // ->selectRaw('teachers.*, COUNT(students.id) AS student_count')
        // ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
        // ->groupBy('teachers.id')
        // ->orderByDesc('student_count')
        // ->limit(5)
        // ->get()
        // ->dump();

        // dump($tae);

        return view('school')->with(compact('students')) ;
    }
}