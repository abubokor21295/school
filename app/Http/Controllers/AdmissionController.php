<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admission;
use App\Models\Student;
use App\Models\Clas;
use App\Models\session;
use App\Models\Department;
use App\Models\Section;

class AdmissionController extends Controller
{

    
    public function index()
    {
        $admission = DB::table('admissions')
        ->select('admissions.*', 'students.name','clas.name as className')
		->join('students', 'admissions.student_id', '=', 'students.id')
		->join('clas', 'admissions.class_id', '=', 'clas.id')
		
        ->paginate(10);

        //$admission = Admission::paginate(10);
        return view('pages.erp.admission.index', ['admissions' => $admission]);
    }

    public function create()
    {
        $classes = Clas::all();
        $sessions = session::all();
        $sections = Section::all();
        $students = Student::all();
        $department = Department::all();
        return view("pages.erp.admission.create", ["classes" => $classes,"departments" => $department,"sessions"=>$sessions,"sections"=>$sections,"students" => $students]);
    }

    public function store(Request $request)
    {
        //		User::create($request->all());

        
        $admission = new admission;
        $admission->user_id =1;
        $admission->student_id = $request->cmbStudent;
        $admission->class_id = $request->cmbClass;
        $admission->section_id = $request->cmbSection;
        $admission->session_id = $request->cmbSession;
        $admission->department_id = $request->cmbDepartment;
        $admission->roll = $request->txtRoll;

        $admission->created_at=date("Y-m-d");
        //$admission->updated_at=date("Y-m-d");
   
   
        if(isset($request->filePhoto)){
          $admission->photo=$request->filePhoto;
        }
   
        //$admission->updated_at=date("Y-m-d");

        
        if(isset($request->filePhoto)){
            $imageName = $admission->student_id.'.'.$request->filePhoto->extension();
            $admission->photo=$imageName;
            $request->filePhoto->move(public_path('img/admission'),$imageName);
        }
        $admission->save();

        return back()->with('success', 'Created Successfully.');
    }
    public function show($id){
		$student=DB::select("select a.id,a.photo,s.name,s.fathers_name,s.mothers_name,s.gender,s.birth_date,c.name as class ,s.phone,a.roll,sum(p.amount) amount,p.created_at,ses.name as sessions,sec.name as section from sch_payments p, sch_admissions a, sch_students s, sch_clas c,sch_sections sec,sch_sessions ses where s.id=a.student_id and p.admission_id=a.id and a.session_id=ses.id and a.class_id=c.id and a.section_id=sec.id and a.id='$id'");
		return view("pages.erp.admission.show",["students"=>$student]);
       // print_r($student);
	}
    public function edit(Admission $admission){
        $classes = Clas::all();
        $sessions = session::all();
        $sections = Section::all();
        $students = Student::all();
        $department = Department::all();
        return view("pages.erp.admission.edit", ["admission" => $admission,"classes" => $classes,"departments" => $department,"sessions"=>$sessions,"sections"=>$sections,"students" => $students]);
    }
    public function update(Request $request,Admission $admission )
    {
        //		User::create($request->all());

        
        $admission = new admission;
        $admission->user_id =1;
        $admission->student_id = $request->cmbStudent;
        $admission->class_id = $request->cmbClass;
        $admission->section_id = $request->cmbSection;
        $admission->session_id = $request->cmbSession;
        $admission->department_id = $request->cmbDepartment;
        $admission->roll = $request->txtRoll;

        //$admission->created_at=date("Y-m-d");
        $admission->updated_at=date("Y-m-d");
   
   
        if(isset($request->filePhoto)){
          $admission->photo=$request->filePhoto;
        }
   
        //$admission->updated_at=date("Y-m-d");

        
        if(isset($request->filePhoto)){
            $imageName = $admission->id.'.'.$request->filePhoto->extension();
            $admission->photo=$imageName;
            $request->filePhoto->move(public_path('img/admission'),$imageName);
        }
        $admission->update();
        return redirect()->route("admissions.index")->with('success','Deleted Successfully.');
    }
}
