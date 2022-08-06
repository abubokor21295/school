<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Clas;
use App\Models\Session;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Department;
use App\Models\Exam;
use App\Models\ExamType;
use App\Models\Student;
use App\Models\Result;

class ResultController extends Controller
{
    public function index()
    {

    //    // $exam=DB::select("SELECT * FROM {$this->px}exams group by day_id");

        $results = DB::select("SELECT r.exam_id,e.class_id,e.section_id FROM sch_results as r, sch_exams as e where e.id=r.exam_id group by e.class_id");

        $clas=Clas::all();
        $section=Section::all();
        $subject=Subject::all();
        $session=Session::all();
        $department=Department::all();
        $examtype=ExamType::all();
    //     //$exam = exam::paginate(10);
        //$exams= Exam::paginate(10);
        return view('pages.erp.result.index', ['results' => $results,"clas" => $clas,"sections" => $section,"sessions"=>$session,"subjects"=>$subject,"departments"=>$department,"examTypes"=>$examtype]);
    }

    public function show($id){
        $results = DB::select("SELECT r.id,r.obt_marks,s.name, r.exam_id,r.class_id,r.section_id FROM sch_results as r, sch_admissions as ad, sch_students as s where ad.id=r.admission_id and s.id=ad.student_id and  r.class_id=$id");
		return view("pages.erp.result.show",["results"=>$results]);
    }

    public function edit(Result $result){
        $clas = Clas::all();
        $section = Section::all();
        $admission= Admission::all();
        return view("pages.erp.result.edit", ["result"=>$result,"clas" => $clas,"sections" => $section,"admissions"=>$admission]);
   }
   public function update(Request $request,Result $result){

    $result->obt_marks=$request->obt_marks;
    $result->updated_at = date("Y-m-d");
    $result->update();
    return redirect()->route("results.index")->with('success','Updated Successfully.');

}
}
