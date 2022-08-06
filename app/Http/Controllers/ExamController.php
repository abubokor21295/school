<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Clas;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Department;
use App\Models\Session;
use App\Models\Weekday;
use App\Models\Room;
use App\Models\Exam;
use App\Models\ExamType;
use App\Models\Result;

class ExamController extends Controller
{
    public function index()
    {

    //    // $exam=DB::select("SELECT * FROM {$this->px}exams group by day_id");

        $exams = DB::table('exams')
        ->select('exams.*','clas.name as class','subjects.name as subject','sections.name as section','sessions.name as session','rooms.name as room','departments.name as department' )
		->join('clas', 'exams.class_id', '=', 'clas.id')
		->join('subjects', 'exams.subject_id', '=', 'subjects.id')
		->join('sections', 'exams.section_id', '=', 'sections.id')
		->join('sessions', 'exams.session_id', '=', 'sessions.id')
		->join('rooms', 'exams.room_id', '=', 'rooms.id')
		->join('departments', 'exams.department_id', '=', 'departments.id')
		//->groupBy('exams.class_id')
        ->groupBy('exams.class_id')
        ->get();

        
    //     //$exam = exam::paginate(10);
        //$exams= Exam::paginate(10);
        return view('pages.erp.exam.index', ['exams' => $exams]);
    }

    public function create()
    {
        $clas = Clas::all();
        $section = Section::all();
        $subject = Subject::all();
        $department = Department::all();
        $room = Room::all();
        $sessions=Session::all();
        $examTypes=ExamType::all();
        return view("pages.erp.exam.create", ["clas" => $clas,"sections" => $section,"subjects" => $subject,"departments" => $department,"rooms" => $room,"sessions" => $sessions,"examTypes"=>$examTypes]);
    }

    public function store(Request $request)
    {
        $exam = new Exam;
        $exam->class_id = $request->cmbClass;
        $exam->section_id = $request->cmbSection;
        $exam->room_id = $request->cmbRoom;
        $exam->department_id = $request->cmbDepartment;
        $exam->session_id = $request->cmbSession;
        $exam->subject_id = $request->cmbSubject;
        $exam->exam_type_id = $request->cmbExamType;
        $exam->exam_date = $request->exam_date;
        $exam->created_at = date("Y-m-d");
        $exam->updated_at = date("Y-m-d");

        $exam->save();

        $students=$request->students;
        foreach($students as $student){
        $result=New Result;
        $result->exam_id=$exam->id;
        $result->admission_id=$student;
        $result->obt_marks=0;
        $result->created_at=date("Y-m-d");
        $result->updated_at=date("Y-m-d");
        $result->save();
  
        }
        
        return redirect()->route("exams.index")->with('success','Deleted Successfully.');
    }

    public function show($id)
    {
        $exam = DB::table('exams')
        ->select('exams.*','clas.name as class','subjects.name as subject','sections.name as section','sessions.name as session','rooms.name as room','departments.name as department' )
		->join('clas', 'exams.class_id', '=', 'clas.id')
		->join('subjects', 'exams.subject_id', '=', 'subjects.id')
		->join('sections', 'exams.section_id', '=', 'sections.id')
		->join('sessions', 'exams.session_id', '=', 'sessions.id')
		->join('rooms', 'exams.room_id', '=', 'rooms.id')
		->join('departments', 'exams.department_id', '=', 'departments.id')
		->where('exams.class_id', '=', $id)
        //->groupBy('exams.day_id')
        ->orderBy('exam_date')
        
        ->get();
        //$exam=DB::select("SELECT * FROM {$this->px}exams where class_id='$id' group by day_id");
        //$exam=exam::find($id);
		return view("pages.erp.exam.show",["exams"=>$exam]);
    }
    public function edit(Exam $exam){
        $clas = Clas::all();
        $section = Section::all();
        $subject = Subject::all();
        $department = Department::all();
        $room = Room::all();
        $sessions=Session::all();
        return view("pages.erp.exam.edit", ["exam"=>$exam,"clas" => $clas,"sections" => $section,"subjects" => $subject,"departments" => $department,"rooms" => $room,"sessions" => $sessions]);
   }

   public function update(Request $request,Exam $exam){

      // echo "ok";

        $exam->class_id = $request->cmbClassId;
        $exam->section_id = $request->cmbSectionId;
        $exam->room_id = $request->cmbRoomId;
        $exam->department_id = $request->cmbDepardmentId;
        $exam->session_id = $request->cmbSessionId;
        $exam->subject_id = $request->cmbSubjectId;
        $exam->exam_date = $request->exam_date;
        $exam->updated_at = date("Y-m-d");

        $exam->update();
        return redirect()->route("exams.index")->with('success','Deleted Successfully.');
   }

}
