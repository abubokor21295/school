<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Attendence;
use App\Models\Clas;
use App\Models\session;
use App\Models\Department;
use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $attendences = DB::table('attendences')
        ->select('attendences.*', 'students.name','admissions.roll','admissions.photo','clas.name as classNAME' )
		->join('admissions', 'attendences.admission_id', '=', 'admissions.id')
		->join('students', 'admissions.student_id', '=', 'students.id')
		->join('clas', 'attendences.class_id', '=', 'clas.id')
        ->orderBy('attendences.date','desc')
        ->orderBy('attendences.time')
        ->paginate(10);
        return view('pages.erp.attendence.index',['attendences'=>$attendences]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Clas::all();
        $sessions = session::all();
        $sections = Section::all();
        $students = Admission::all();
        $department = Department::all();
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $admissions = DB::table('admissions')
        ->select('admissions.*', 'students.name' )
		->join('students', 'admissions.student_id', '=', 'students.id')
        ->paginate(10);
        return view("pages.erp.attendence.create", ["classes" => $classes,"departments" => $department,"sessions"=>$sessions,"sections"=>$sections,"students" => $admissions,"subjects" => $subjects,"teachers" => $teachers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $students=$request->students;
      foreach($students as $student){
      $attendence=New Attendence;
      $attendence->admission_id=$student;
      $attendence->class_id=$request->cmbClass;
      $attendence->section_id=$request->cmbSection;
      $attendence->subject_id=$request->cmbSubject;
      $attendence->teacher_id=$request->cmbTeacher;
      $attendence->date=today();
      $attendence->time=now();
      $attendence->created_at=date("Y-m-d");
      $attendence->updated_at=date("Y-m-d");
      $attendence->save();

      }
      return redirect()->route("attendences.index")->with('success','Saved Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
